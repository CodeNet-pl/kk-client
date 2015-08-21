<?php
namespace CodeNet\KKClient\Resource;

use CodeNet\KKClient\Resource;
use CodeNet\KKClient\Response;

class Courier extends Resource
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $available;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var float
     */
    protected $netPriceTotalWithoutDiscount;

    /**
     * @var float
     */
    protected $grossPriceTotalWithoutDiscount;

    /**
     * @var float
     */
    protected $netPriceTotal;

    /**
     * @var float
     */
    protected $grossPriceTotal;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = (int) $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function isAvailable()
    {
        return $this->available;
    }

    /**
     * @param boolean $available
     */
    public function setAvailable($available)
    {
        $this->available = (bool) $available;
    }

    /**
     * @return float
     */
    public function getNetPriceTotalWithoutDiscount()
    {
        return $this->netPriceTotalWithoutDiscount;
    }

    /**
     * @param float $netPriceTotalWithoutDiscount
     */
    public function setNetPriceTotalWithoutDiscount($netPriceTotalWithoutDiscount)
    {
        $this->netPriceTotalWithoutDiscount = $netPriceTotalWithoutDiscount;
    }

    /**
     * @return float
     */
    public function getGrossPriceTotalWithoutDiscount()
    {
        return $this->grossPriceTotalWithoutDiscount;
    }

    /**
     * @param float $grossPriceTotalWithoutDiscount
     */
    public function setGrossPriceTotalWithoutDiscount($grossPriceTotalWithoutDiscount)
    {
        $this->grossPriceTotalWithoutDiscount = $grossPriceTotalWithoutDiscount;
    }

    /**
     * @return float
     */
    public function getNetPriceTotal()
    {
        return $this->netPriceTotal;
    }

    /**
     * @param float $netPriceTotal
     */
    public function setNetPriceTotal($netPriceTotal)
    {
        $this->netPriceTotal = $netPriceTotal;
    }

    /**
     * @return float
     */
    public function getGrossPriceTotal()
    {
        return $this->grossPriceTotal;
    }

    /**
     * @param float $grossPriceTotal
     */
    public function setGrossPriceTotal($grossPriceTotal)
    {
        $this->grossPriceTotal = $grossPriceTotal;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
}