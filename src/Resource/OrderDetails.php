<?php
namespace CodeNet\KKClient\Resource;

use CodeNet\KKClient\Resource;

class OrderDetails extends BaseOrder
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $courier;

    /**
     * @var string
     */
    protected $receiverMachineDescription;

    /**
     * @var string
     */
    protected $senderMachineDescription;

    /**
     * @var integer
     */
    protected $packagesNumber;

    /**
     * @var float
     */
    protected $maxWeight;

    /**
     * @var string
     */
    protected $codPayOutDate;

    /**
     * @var string
     */
    protected $services;

    /**
     * @var float
     */
    protected $netPrice;

    /**
     * @var float
     */
    protected $grossPrice;

    /**
     * @var string
     */
    protected $orderStatus;

    /**
     * @var string
     */
    protected $packageStatus;

    /**
     * @var string
     */
    protected $labelNumber;

    /**
     * @var string
     */
    protected $courierOrderNumber;
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
    public function getCodPayOutDate()
    {
        return $this->codPayOutDate;
    }

    /**
     * @param string $codPayOutDate
     */
    public function setCodPayOutDate($codPayOutDate)
    {
        $this->codPayOutDate = $codPayOutDate;
    }

    /**
     * @return string
     */
    public function getCourierOrderNumber()
    {
        return $this->courierOrderNumber;
    }

    /**
     * @param string $courierOrderNumber
     */
    public function setCourierOrderNumber($courierOrderNumber)
    {
        $this->courierOrderNumber = $courierOrderNumber;
    }

    /**
     * @param boolean $insurance
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
    }

    /**
     * @return string
     */
    public function getLabelNumber()
    {
        return $this->labelNumber;
    }

    /**
     * @param string $labelNumber
     */
    public function setLabelNumber($labelNumber)
    {
        $this->labelNumber = $labelNumber;
    }

    /**
     * @return float
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

    /**
     * @param float $maxWeight
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;
    }

    /**
     * @return float
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * @param float $netPrice
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getPackageStatus()
    {
        return $this->packageStatus;
    }

    /**
     * @param string $packageStatus
     */
    public function setPackageStatus($packageStatus)
    {
        $this->packageStatus = $packageStatus;
    }

    /**
     * @return string
     */
    public function getReceiverMachineDescription()
    {
        return $this->receiverMachineDescription;
    }

    /**
     * @param string $receiverMachineDescription
     */
    public function setReceiverMachineDescription($receiverMachineDescription)
    {
        $this->receiverMachineDescription = $receiverMachineDescription;
    }

    /**
     * @return Service
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param Service $service
     */
    public function addService($service)
    {
        if (!$service instanceof Service) {
            $service = new Service($service);
        }
        $this->services[] = $service;
    }

    /**
     * @return int
     */
    public function getPackagesNumber()
    {
        return $this->packagesNumber;
    }

    /**
     * @param int $packagesNumber
     */
    public function setPackagesNumber($packagesNumber)
    {
        $this->packagesNumber = $packagesNumber;
    }

    /**
     * @return string
     */
    public function getSenderMachineDescription()
    {
        return $this->senderMachineDescription;
    }

    /**
     * @param string $senderMachineDescription
     */
    public function setSenderMachineDescription($senderMachineDescription)
    {
        $this->senderMachineDescription = $senderMachineDescription;
    }
}