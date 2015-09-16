<?php
namespace CodeNet\KKClient\Resource;

use CodeNet\KKClient\Resource;

class BaseOrder extends Resource
{
    use SenderInfoTrait;
    use ReceiverInfoTrait;

    /**
     * @var string
     */
    protected $receiverEmail;

    /**
     * @var string
     */
    protected $senderMachineName;

    /**
     * @var string
     */
    protected $receiverMachineName;

    /**
     * @var string
     */
    protected $packageType;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var boolean
     */
    protected $insurance;

    /**
     * @var string
     */
    protected $deliveryDate;

    /**
     * @var string
     */
    protected $deliveryTime;

    /**
     * @var string
     */
    protected $pickupDate;

    /**
     * @var string
     */
    protected $pickupTimeFrom;

    /**
     * @var string
     */
    protected $pickupTimeTo;

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
    protected $comments;

    /**
     * @var Package[]
     */
    protected $packages = array();

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
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
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
        $this->cod = $cod;
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
     * @param string $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
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
        if (is_string($pickupTimeFrom) && strpos($pickupTimeFrom, ':') !== false) {
            list($hour, $minute) = explode(':', $pickupTimeFrom);
            if (strlen($hour) < 2) {
                $hour = '0' . $hour;
            }

            $pickupTimeFrom = $hour . ':' . $minute;
        } else {
            $pickupTimeFrom = null;
        }
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
        if (is_string($pickupTimeTo) && strpos($pickupTimeTo, ':') !== false) {
            list($hour, $minute) = explode(':', $pickupTimeTo);
            if (strlen($hour) < 2) {
                $hour = '0' . $hour;
            }

            $pickupTimeTo = $hour . ':' . $minute;
        } else {
            $pickupTimeTo = null;
        }
        $this->pickupTimeTo = $pickupTimeTo;
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

    /**
     * @return Resource\Package[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @param Resource\Package[] $package
     */
    public function addPackage($package)
    {
        if (!$package instanceof Package) {
            $package = new Package($package);
        }
        $this->packages[] = $package;
    }

    /**
     * @param Package $package
     */
    public function removePackage(Package $package)
    {
        $index = array_search($package, $this->packages, true);
        if (false !== $index) {
            unset($this->packages[$index]);
        }
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
}