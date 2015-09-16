<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Resource\Order;
use CodeNet\KKClient\Response;

class OrdersResponse extends Response
{
    /**
     * @var Order[]
     */
    protected $orders = array();

    /**
     * @return Order[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param Order|array $order
     */
    public function addOrder($order)
    {
        if ($order instanceof \SimpleXMLElement) {
            $order = new Order($order);
        }
        $this->orders[] = $order;
    }
}