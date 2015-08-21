<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Response;

class CreateOrderResponse extends Response
{
    /**
     * @var integer
     */
    protected $orderId;

    /**
     * @var integer
     */
    protected $orderProcessResult;

    /**
     * @var string
     */
    protected $paymentLink;

    /**
     * @return string
     */
    public function getPaymentLink()
    {
        return $this->paymentLink;
    }

    /**
     * @param string $paymentLink
     */
    public function setPaymentLink($paymentLink)
    {
        $this->paymentLink = (string) $paymentLink;
    }

    /**
     * @return int
     */
    public function getOrderProcessResult()
    {
        return $this->orderProcessResult;
    }

    /**
     * @param int $orderProcessResult
     */
    public function setOrderProcessResult($orderProcessResult)
    {
        $this->orderProcessResult = (int) $orderProcessResult;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = (int) $orderId;
    }
}