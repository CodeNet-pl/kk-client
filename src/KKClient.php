<?php
namespace CodeNet\KKClient;

use CodeNet\KKClient\Exception\ClientErrorException;
use CodeNet\KKClient\Exception\InvalidArgumentException;
use CodeNet\KKClient\Request\CheckPricesRequest;
use CodeNet\KKClient\Request\CreateOrderRequest;
use CodeNet\KKClient\Request\InpostMachinesRequest;
use CodeNet\KKClient\Resource\OrderDetails;
use CodeNet\KKClient\Response\CheckDataResponse;
use CodeNet\KKClient\Response\CheckPricesResponse;
use CodeNet\KKClient\Response\CreateOrderResponse;
use CodeNet\KKClient\Response\OrdersResponse;
use CodeNet\KKClient\Response\ProfileResponse;
use CodeNet\KKClient\SessionStorage\MemorySessionStorage;
use CodeNet\KKClient\SessionStorage\NativeSessionStorage;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

class KKClient
{
    /**
     * @var string
     */
    protected $prodUrl = 'https://www.korporacjakurierska.pl/api/';

    /**
     * @var string
     */
    protected $testUrl = 'http://test.korporacjakurierska.pl/api/';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var SessionStorageInterface
     */
    private $sessionStorage;

    /**
     * @var array
     */
    private $transactionHistory = [];

    public function __construct($email, $password, SessionStorageInterface $sessionStorage = null, $env = 'prod', $debug = false)
    {
        if (!in_array($env, ['test', 'prod'], true)) {
            throw new InvalidArgumentException("Environment must be one of: prod, test");
        }
        if (null === $sessionStorage) {
            if (php_sapi_name() == "cli") {
                $sessionStorage = new MemorySessionStorage();
            } else {
                $sessionStorage = new NativeSessionStorage();
            }
        }
        $this->sessionStorage = $sessionStorage;
        $this->email = $email;
        $this->password = $password;

        $params = [
            'base_uri' => $this->{$env . 'Url'}
        ];

        if ($debug) {
            $this->transactionHistory = [];
            $history = Middleware::history($this->transactionHistory);
            $stack = HandlerStack::create();
            $stack->push($history);
            $params['handler'] = $stack;
        }

        $this->client = new Client($params);
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionStorage->getSessionId();
    }

    /**
     * @param string $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionStorage->setSessionId((string) $sessionId);
    }

    /**
     * @return SessionStorageInterface
     */
    public function getSessionStorage()
    {
        return $this->sessionStorage;
    }

    /**
     * @param SessionStorageInterface $sessionStorage
     */
    public function setSessionStorage($sessionStorage)
    {
        $this->sessionStorage = $sessionStorage;
    }

    public function login()
    {
        if (!$this->getSessionId()) {
            $response = $this->post('login', ['email' => $this->email, 'password' => md5($this->password)]);
            $this->setSessionId($response->session);
        }
    }

    public function getTransactionHistory()
    {
        return $this->transactionHistory;
    }

    private function post($path, array $data = [])
    {
        $response = $this->client->post($path . '.xml', [
            'form_params' => $data
        ]);

        $xml = simplexml_load_string($response->getBody()->getContents());

        if ('OK' != $xml->status) {
            throw new ClientErrorException((string) $xml->message ? : "API Error");
        }

        return $xml;
    }

    /**
     * @return ProfileResponse
     * @throws ClientErrorException
     */
    public function getProfile($class = 'CodeNet\KKClient\Response\ProfileResponse')
    {
        return $this->request('profile', [], $class);
    }

    /**
     * @param array $data
     * @param string $class
     * @return CheckPricesResponse
     */
    public function checkPrices($data, $class = 'CodeNet\KKClient\Response\CheckPricesResponse')
    {
        if ($data instanceof CheckPricesRequest) {
            $data = $data->toArray();
        }
        if (!is_array($data)) {
            throw new InvalidArgumentException("Order should be an array or OrderDetails instance");
        }
        return $this->request('checkPrices', $data, $class);
    }

    /**
     * @param array $data
     * @param string $class
     * @return CheckDataResponse
     */
    public function checkData($order, $class = 'CodeNet\KKClient\Response\CheckDataResponse')
    {
        if ($order instanceof CreateOrderRequest) {
            $order = $order->toArray();
        }
        if (!is_array($order)) {
            throw new InvalidArgumentException("Order should be an array or OrderDetails instance");
        }
        return $this->request('checkData', $order, $class);
    }

    /**
     * @param OrderDetails|array $order
     * @param string $class
     * @return CreateOrderResponse
     */
    public function createOrder($order, $class = 'CodeNet\KKClient\Response\CreateOrderResponse')
    {
        if ($order instanceof CreateOrderRequest) {
            $order = $order->toArray();
        }
        if (!is_array($order)) {
            throw new InvalidArgumentException("Order should be an array or OrderDetails instance");
        }
        return $this->request('makeOrder', $order, $class);
    }

    /**
     *
     * @param $class
     * @return OrdersResponse
     */
    public function getOrders($class = 'CodeNet\KKClient\Response\OrdersResponse')
    {
        return $this->request('orders', [], $class);
    }

    public function getOrder($id)
    {
        $id = (int) $id;
        if ($id <= 0) {
            throw new InvalidArgumentException("Expected order ID greater than zero");
        }
        return $this->request('order/' . $id, [], 'CodeNet\KKClient\Response\OrderResponse');
    }

    public function getInpostMachines($request, $class = 'CodeNet\KKClient\Response\InpostMachinesResponse')
    {
        if ($request instanceof InpostMachinesRequest) {
            $request = $request->toArray();
        }
        if (!is_array($request)) {
            throw new InvalidArgumentException("Request should be an array or InpostMachinesRequest instance");
        }
        return $this->request('inpostMachines', $request, $class);
    }

    public function request($path, array $data = [], $class = 'CodeNet\KKClient\Response')
    {
        $this->login();

        $data['session'] = $this->getSessionId();

        $xml = $this->post($path, $data);

        return new $class($xml);
    }
}