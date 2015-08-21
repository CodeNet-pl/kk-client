<?php
namespace CodeNet\KKClient\Tests;

use CodeNet\KKClient\KKClient;
use CodeNet\KKClient\Request\CheckPricesRequest;
use CodeNet\KKClient\Request\InpostMachinesRequest;
use CodeNet\KKClient\Resource\Courier;
use CodeNet\KKClient\Resource\OrderDetails;
use Psr\Http\Message\RequestInterface;
use CodeNet\KKClient\Request\CreateOrderRequest;

class KKClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @var KKClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $sessionId;


    protected function setUp()
    {
        $this->config = require __DIR__ . "/config.php";
        $this->client = new KKClient($this->config['email'], $this->config['password'], 'test', true);
        if ($this->sessionId) { // reuse existing session
            $this->client->setSessionId($this->sessionId);
        } else {
            $this->client->login();
            $this->sessionId = $this->client->getSessionId();
        }
    }

    public function testProfile()
    {
        $profile = $this->client->getProfile();
        $this->assertInstanceOf('CodeNet\\KKClient\\Response', $profile);
        $this->assertEquals($this->config['email'], $profile->getEmail());
        $this->assertInternalType('string', $profile->getCity());
        $this->assertInternalType('float', $profile->getBalance());
        $this->assertInternalType('bool', $profile->getNewsletter());
    }

    public function testCheckPrices()
    {
        $check = new CheckPricesRequest([
            'packageType' => 'paczka',
            'packages' => [
                ['weight' => 1, 'width' => 1, 'length' => 1, 'height' => 1, 'unsortableShape' => 0],
                ['weight' => 1, 'width' => 2, 'length' => 1, 'height' => 2, 'unsortableShape' => 1]
            ]
        ]);

        $this->assertEquals('paczka', $check->getPackageType());
        $this->assertCount(2, $check->getPackages());
        $this->assertInstanceOf('CodeNet\KKClient\Resource\Package', $check->getPackages()[0]);

        $prices = $this->client->checkPrices($check);

        $this->assertInstanceOf('CodeNet\KKClient\Response\CheckPricesResponse', $prices);
    }

    public function testCheckData()
    {
        $order = new CreateOrderRequest([
            'courier' => '5',
            'packageType' => 'paczka',
            'pickupDate' => date('Y-m-d', strtotime('+3 day')),
            'deliveryDate' => date('Y-m-d', strtotime('+4 days')),

            'senderName' => 'Tester',
            'senderLastName' => 'Test',
            'senderStreet' => 'ul. Testowa',
            'senderHouseNumber' => '1',
            'senderPostCode' => '02-825',
            'senderCity' => 'Warszawa',
            'senderPhone' => '123123123',
            'senderCountry' => 'PL',

            'receiverName' => 'Tester',
            'receiverLastName' => 'Test',
            'receiverStreet' => 'ul. Testowa',
            'receiverHouseNumber' => '1',
            'receiverPostCode' => '02-825',
            'receiverCity' => 'Warszawa',
            'receiverPhone' => '123123123',
            'receiverCountry' => 'PL',

            'content' => 'Foo',

            'packages' => [
                ['weight' => 1, 'width' => 1, 'length' => 1, 'height' => 1, 'unsortableShape' => 0]
            ]
        ]);

        $prices = $this->client->checkData($order);
        $this->assertInstanceOf('CodeNet\KKClient\Response\CheckDataResponse', $prices);
    }

    public function testCreateOrder()
    {
        $order = new CreateOrderRequest([
            'courier' => '5',
            'packageType' => 'paczka',
            'pickupDate' => date('Y-m-d', strtotime('+3 days')),
            'deliveryDate' => date('Y-m-d', strtotime('+4 days')),

            'senderName' => 'Tester2',
            'senderLastName' => 'Test2',
            'senderStreet' => 'ul. Testowa',
            'senderHouseNumber' => '2',
            'senderPostCode' => '02-825',
            'senderCity' => 'Warszawa',
            'senderPhone' => '123123123',
            'senderCountry' => 'PL',

            'receiverName' => 'Tester',
            'receiverLastName' => 'Test',
            'receiverStreet' => 'ul. Testowa',
            'receiverHouseNumber' => '1',
            'receiverPostCode' => '02-825',
            'receiverCity' => 'Warszawa',
            'receiverPhone' => '123123123',
            'receiverCountry' => 'PL',

            'content' => 'Foo2',

            'packages' => [
                ['weight' => 1, 'width' => 1, 'length' => 1, 'height' => 1, 'unsortableShape' => 0],
                ['weight' => 2, 'width' => 1, 'length' => 1, 'height' => 1, 'unsortableShape' => 1]
            ]
        ]);

        $order = $this->client->createOrder($order);

        $this->assertInstanceOf('CodeNet\KKClient\Response\CreateOrderResponse', $order);
    }

    public function testOrders()
    {
        $response = $this->client->getOrders();
        $this->assertInstanceOf('CodeNet\KKClient\Response\OrdersResponse', $response);

        $order = $response->getOrders()[0];

        $response = $this->client->getOrder($order->getId());

        $this->assertInstanceOf('CodeNet\KKClient\Response\OrderResponse', $response);
    }

    public function testInpostMachines()
    {
        $request = new InpostMachinesRequest();
        $request->setCod(false);
        $request->setCity('Warszawa');

        $response = $this->client->getInpostMachines($request);

        dump($response);
    }
}