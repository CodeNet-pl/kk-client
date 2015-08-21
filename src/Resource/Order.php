<?php
namespace CodeNet\KKClient\Resource;

use CodeNet\KKClient\Resource;

class Order extends Resource
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $receiverName;

    /**
     * @var string
     */
    protected $receiverLastName;

    /**
     * @var string
     */
    protected $receiverCompany;

    /**
     * @var string
     */
    protected $courier;

    /**
     * @var float
     */
    protected $grossPrice;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var boolean
     */
    protected $labelAvailable;

    /**
     * @var boolean
     */
    protected $labelZebraAvailable;

    /**
     * @return string
     */
    public function getCourier()
    {
        return $this->courier;
    }

    /**
     * @param string $courier
     */
    public function setCourier($courier)
    {
        $this->courier = $courier;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime|string $date
     */
    public function setDate($date)
    {
        if (is_string($date)) {
            $date = new \DateTime($date);
        }
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * @param float $grossPrice
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = (float) $grossPrice;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = (string) $status;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return boolean
     */
    public function isLabelAvailable()
    {
        return $this->labelAvailable;
    }

    /**
     * @param boolean $labelAvailable
     */
    public function setLabelAvailable($labelAvailable)
    {
        $this->labelAvailable = $labelAvailable;
    }

    /**
     * @return boolean
     */
    public function isLabelZebraAvailable()
    {
        return $this->labelZebraAvailable;
    }

    /**
     * @param boolean $labelZebraAvailable
     */
    public function setLabelZebraAvailable($labelZebraAvailable)
    {
        $this->labelZebraAvailable = $labelZebraAvailable;
    }

    /**
     * @return string
     */
    public function getReceiverCompany()
    {
        return $this->receiverCompany;
    }

    /**
     * @param string $receiverCompany
     */
    public function setReceiverCompany($receiverCompany)
    {
        $this->receiverCompany = $receiverCompany;
    }

    /**
     * @return string
     */
    public function getReceiverLastName()
    {
        return $this->receiverLastName;
    }

    /**
     * @param string $receiverLastName
     */
    public function setReceiverLastName($receiverLastName)
    {
        $this->receiverLastName = $receiverLastName;
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param string $receiverName
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
    }
}