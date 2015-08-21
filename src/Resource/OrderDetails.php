<?php
namespace CodeNet\KKClient\Resource;

use CodeNet\KKClient\Resource;

class OrderDetails extends Resource
{
    use SenderInfoTrait;
    use ReceiverInfoTrait;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $senderMachineName;

    /**
     * @var string
     */
    protected $senderMachineDescription;

    /**
     * @var string
     */
    protected $receiverEmail;

    /**
     * @var string
     */
    protected $receiverMachineName;

    /**
     * @var string
     */
    protected $receiverMachineDescription;

    /**
     * @var string
     */
    protected $packageType;

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
    protected $content;

    /**
     * @var string
     */
    protected $pickupTimeFrom;

    /**
     * @var string
     */
    protected $pickupTimeTo;

    /**
     * @var string
     */
    protected $pickupDate;

    /**
     * @var string
     */
    protected $deliveryDate;

    /**
     * @var string
     */
    protected $deliveryTime;

    /**
     * @var boolean
     */
    protected $cod;

    /**
     * @var float
     */
    protected $codAmount;

    /**
     * @var string
     */
    protected $codBankAccount;

    /**
     * @var string
     */
    protected $codPayOutDate;

    /**
     * @var boolean
     */
    protected $insurance;

    /**
     * @var float
     */
    protected $declaredValue;

    /**
     * @var string
     */
    protected $comments;

    /**
     * @var Package[]
     */
    protected $packages;

    /**
     * @var string
     */
    protected $services;

    /**
     * @var string
     */
    protected $courier;

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

    /**
     * @return boolean
     */
    public function isCod()
    {
        return $this->cod;
    }

    /**
     * @param boolean $cod
     */
    public function setCod($cod)
    {
        $this->cod = (bool) $cod;
    }

    /**
     * @return float
     */
    public function getCodAmount()
    {
        return $this->codAmount;
    }

    /**
     * @param float $codAmount
     */
    public function setCodAmount($codAmount)
    {
        $this->codAmount = $codAmount;
    }

    /**
     * @return string
     */
    public function getCodBankAccount()
    {
        return $this->codBankAccount;
    }

    /**
     * @param string $codBankAccount
     */
    public function setCodBankAccount($codBankAccount)
    {
        $this->codBankAccount = $codBankAccount;
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
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * @param float $declaredValue
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param string $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->deliveryTime;
    }

    /**
     * @param string $deliveryTime
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->deliveryTime = $deliveryTime;
    }

    /**
     * @return boolean
     */
    public function isInsurance()
    {
        return $this->insurance;
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
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * @param string $packageType
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
    }

    /**
     * @return Package[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @param Package $package
     */
    public function addPackage($package)
    {
        if ($package instanceof \SimpleXMLElement) {
            $package = new Package($package);
        }

        $this->packages[] = $package;
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
        $this->packagesNumber = (int) $packagesNumber;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;
    }

    /**
     * @return string
     */
    public function getPickupTimeFrom()
    {
        return $this->pickupTimeFrom;
    }

    /**
     * @param string $pickupTimeFrom
     */
    public function setPickupTimeFrom($pickupTimeFrom)
    {
        $this->pickupTimeFrom = $pickupTimeFrom;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo()
    {
        return $this->pickupTimeTo;
    }

    /**
     * @param string $pickupTimeTo
     */
    public function setPickupTimeTo($pickupTimeTo)
    {
        $this->pickupTimeTo = $pickupTimeTo;
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
     * @return string
     */
    public function getReceiverMachineName()
    {
        return $this->receiverMachineName;
    }

    /**
     * @param string $receiverMachineName
     */
    public function setReceiverMachineName($receiverMachineName)
    {
        $this->receiverMachineName = $receiverMachineName;
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

    /**
     * @return string
     */
    public function getSenderMachineName()
    {
        return $this->senderMachineName;
    }

    /**
     * @param string $senderMachineName
     */
    public function setSenderMachineName($senderMachineName)
    {
        $this->senderMachineName = $senderMachineName;
    }

    /**
     * @return string
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param string $services
     */
    public function setServices($services)
    {
        $this->services = $services;
    }

    /**
     * @return string
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    /**
     * @param string $receiverEmail
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail;
    }
}