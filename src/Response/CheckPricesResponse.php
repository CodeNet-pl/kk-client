<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Exception\InvalidArgumentException;
use CodeNet\KKClient\Resource\Courier;
use CodeNet\KKClient\Response;

class CheckPricesResponse extends Response
{
    /**
     * @var Courier[]
     */
    protected $couriers = [];

    /**
     * @return Courier[]
     */
    public function getCouriers()
    {
        return $this->couriers;
    }

    /**
     * @param Courier|\SimpleXMLElement $courier
     */
    public function addCourier($courier)
    {
        if ($courier instanceof \SimpleXMLElement) {
            $courier = new Courier($courier);
        }

        $this->couriers[] = $courier;
    }
}