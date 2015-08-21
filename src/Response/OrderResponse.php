<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Resource\OrderDetails;
use CodeNet\KKClient\Response;

class OrderResponse extends Response
{
    /**
     * @var OrderDetails
     */
    protected $orderDetails;

    /**
     * @return OrderDetails
     */
    public function getOrderDetails()
    {
        return $this->orderDetails;
    }

    /**
     * @param OrderDetails|\SimpleXMLElement $orderDetails
     */
    public function setOrderDetails($orderDetails)
    {
        if ($orderDetails instanceof \SimpleXMLElement) {
            $orderDetails = new OrderDetails($orderDetails);
        }
        $this->orderDetails = $orderDetails;
    }
}