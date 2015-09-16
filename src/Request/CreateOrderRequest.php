<?php
namespace CodeNet\KKClient\Request;

use CodeNet\KKClient\Request;
use CodeNet\KKClient\Resource\BaseOrder;
use CodeNet\KKClient\Resource\Courier;

class CreateOrderRequest extends BaseOrder
{
    /**
     * @var int
     */
    protected $paymentType;

    /**
     * @var string
     */
    protected $codType;

    /**
     * @var Courier
     */
    protected $courier;

    /**
     * @var boolean
     */
    protected $rod;

    /**
     * @var boolean
     */
    protected $service1200;

    /**
     * @var boolean
     */
    protected $service0900;

    /**
     * @var boolean
     */
    protected $service1000;

    /**
     * @var boolean
     */
    protected $inPers;

    /**
     * @var boolean
     */
    protected $confirmationEmail;

    /**
     * @var boolean
     */
    protected $confirmationSms;

    /**
     * @var boolean
     */
    protected $deliveryNotification;

    /**
     * @var boolean
     */
    protected $deliveryNotificationPhone;

    /**
     * @var boolean
     */
    protected $deliveryNotificationEmail;

    /**
     * @var boolean
     */
    protected $deliveryNotificationSms;

    /**
     * @var boolean
     */
    protected $sendingNotificationPhone;

    /**
     * @var boolean
     */
    protected $sendingNotificationEmail;

    /**
     * @var boolean
     */
    protected $sendingNotificationSms;

    /**
     * @var boolean
     */
    protected $deliveryConfirmation;

    /**
     * @var boolean
     */
    protected $bringing;

    /**
     * @var boolean
     */
    protected $unloading;

    /**
     * @var boolean
     */
    protected $privateSender;

    /**
     * @var boolean
     */
    protected $privateReceiver;

    /**
     * @var boolean
     */
    protected $marketReceiver;

    /**
     * @var boolean
     */
    protected $sending1719;

    /**
     * @var boolean
     */
    protected $delivery1719;

    /**
     * @var boolean
     */
    protected $delivery1922;

    /**
     * @var boolean
     */
    protected $delivery1822;

    /**
     * @var boolean
     */
    protected $sending1722;

    /**
     * @var boolean
     */
    protected $delivery1722;

    /**
     * @var boolean
     */
    protected $euroReturn;

    /**
     * @var boolean
     */
    protected $deliverySaturday;

    /**
     * @var boolean
     */
    protected $expressPlus;

    /**
     * @var boolean
     */
    protected $selfCollection;

    /**
     * @var boolean
     */
    protected $hourDelivery;

    /**
     * @var boolean
     */
    protected $packageChecking;

    /**
     * @var boolean
     */
    protected $adr;

    /**
     * @var boolean
     */
    protected $smsSendingNotification;

    /**
     * @var boolean
     */
    protected $noCourierOrder;


    /**
     * @return Courier
     */
    public function getCourier()
    {
        return $this->courier;
    }

    /**
     * @param mixed $courier
     */
    public function setCourier($courier)
    {
        if (!$courier instanceof Courier) {
            if (is_array($courier)) {
                $courier = new Courier($courier);
            } else {
                $courier = new Courier(['id' => $courier]);
            }
        }
        $this->courier = $courier;
    }

    /**
     * @return boolean
     */
    public function isAdr()
    {
        return $this->adr;
    }

    /**
     * @param boolean $adr
     */
    public function setAdr($adr)
    {
        $this->adr = (bool) $adr;
    }

    /**
     * @return boolean
     */
    public function isBringing()
    {
        return $this->bringing;
    }

    /**
     * @param boolean $bringing
     */
    public function setBringing($bringing)
    {
        $this->bringing = (bool) $bringing;
    }

    /**
     * @return boolean
     */
    public function isConfirmationEmail()
    {
        return $this->confirmationEmail;
    }

    /**
     * @param boolean $confirmationEmail
     */
    public function setConfirmationEmail($confirmationEmail)
    {
        $this->confirmationEmail = (bool) $confirmationEmail;
    }

    /**
     * @return boolean
     */
    public function isConfirmationSms()
    {
        return $this->confirmationSms;
    }

    /**
     * @param boolean $confirmationSms
     */
    public function setConfirmationSms($confirmationSms)
    {
        $this->confirmationSms = (bool) $confirmationSms;
    }

    /**
     * @return boolean
     */
    public function isDelivery1719()
    {
        return $this->delivery1719;
    }

    /**
     * @param boolean $delivery1719
     */
    public function setDelivery1719($delivery1719)
    {
        $this->delivery1719 = (bool) $delivery1719;
    }

    /**
     * @return boolean
     */
    public function isDelivery1722()
    {
        return $this->delivery1722;
    }

    /**
     * @param boolean $delivery1722
     */
    public function setDelivery1722($delivery1722)
    {
        $this->delivery1722 = (bool) $delivery1722;
    }

    /**
     * @return boolean
     */
    public function isDelivery1822()
    {
        return $this->delivery1822;
    }

    /**
     * @param boolean $delivery1822
     */
    public function setDelivery1822($delivery1822)
    {
        $this->delivery1822 = (bool) $delivery1822;
    }

    /**
     * @return boolean
     */
    public function isDelivery1922()
    {
        return $this->delivery1922;
    }

    /**
     * @param boolean $delivery1922
     */
    public function setDelivery1922($delivery1922)
    {
        $this->delivery1922 = (bool) $delivery1922;
    }

    /**
     * @return boolean
     */
    public function isDeliveryConfirmation()
    {
        return $this->deliveryConfirmation;
    }

    /**
     * @param boolean $deliveryConfirmation
     */
    public function setDeliveryConfirmation($deliveryConfirmation)
    {
        $this->deliveryConfirmation = (bool) $deliveryConfirmation;
    }

    /**
     * @return boolean
     */
    public function isDeliveryNotification()
    {
        return $this->deliveryNotification;
    }

    /**
     * @param boolean $deliveryNotification
     */
    public function setDeliveryNotification($deliveryNotification)
    {
        $this->deliveryNotification = (bool) $deliveryNotification;
    }

    /**
     * @return boolean
     */
    public function isDeliveryNotificationEmail()
    {
        return $this->deliveryNotificationEmail;
    }

    /**
     * @param boolean $deliveryNotificationEmail
     */
    public function setDeliveryNotificationEmail($deliveryNotificationEmail)
    {
        $this->deliveryNotificationEmail = (bool) $deliveryNotificationEmail;
    }

    /**
     * @return boolean
     */
    public function isDeliveryNotificationPhone()
    {
        return $this->deliveryNotificationPhone;
    }

    /**
     * @param boolean $deliveryNotificationPhone
     */
    public function setDeliveryNotificationPhone($deliveryNotificationPhone)
    {
        $this->deliveryNotificationPhone = (bool) $deliveryNotificationPhone;
    }

    /**
     * @return boolean
     */
    public function isDeliveryNotificationSms()
    {
        return $this->deliveryNotificationSms;
    }

    /**
     * @param boolean $deliveryNotificationSms
     */
    public function setDeliveryNotificationSms($deliveryNotificationSms)
    {
        $this->deliveryNotificationSms = (bool) $deliveryNotificationSms;
    }

    /**
     * @return boolean
     */
    public function isDeliverySaturday()
    {
        return $this->deliverySaturday;
    }

    /**
     * @param boolean $deliverySaturday
     */
    public function setDeliverySaturday($deliverySaturday)
    {
        $this->deliverySaturday = (bool) $deliverySaturday;
    }

    /**
     * @return boolean
     */
    public function isEuroReturn()
    {
        return $this->euroReturn;
    }

    /**
     * @param boolean $euroReturn
     */
    public function setEuroReturn($euroReturn)
    {
        $this->euroReturn = (bool) $euroReturn;
    }

    /**
     * @return boolean
     */
    public function isExpressPlus()
    {
        return $this->expressPlus;
    }

    /**
     * @param boolean $expressPlus
     */
    public function setExpressPlus($expressPlus)
    {
        $this->expressPlus = (bool) $expressPlus;
    }

    /**
     * @return boolean
     */
    public function isHourDelivery()
    {
        return $this->hourDelivery;
    }

    /**
     * @param boolean $hourDelivery
     */
    public function setHourDelivery($hourDelivery)
    {
        $this->hourDelivery = (bool) $hourDelivery;
    }

    /**
     * @return boolean
     */
    public function isInPers()
    {
        return $this->inPers;
    }

    /**
     * @param boolean $inPers
     */
    public function setInPers($inPers)
    {
        $this->inPers = (bool) $inPers;
    }

    /**
     * @return boolean
     */
    public function isMarketReceiver()
    {
        return $this->marketReceiver;
    }

    /**
     * @param boolean $marketReceiver
     */
    public function setMarketReceiver($marketReceiver)
    {
        $this->marketReceiver = (bool) $marketReceiver;
    }

    /**
     * @return boolean
     */
    public function isNoCourierOrder()
    {
        return $this->noCourierOrder;
    }

    /**
     * @param boolean $noCourierOrder
     */
    public function setNoCourierOrder($noCourierOrder)
    {
        $this->noCourierOrder = (bool) $noCourierOrder;
    }

    /**
     * @return boolean
     */
    public function isPackageChecking()
    {
        return $this->packageChecking;
    }

    /**
     * @param boolean $packageChecking
     */
    public function setPackageChecking($packageChecking)
    {
        $this->packageChecking = (bool) $packageChecking;
    }

    /**
     * @return boolean
     */
    public function isPrivateReceiver()
    {
        return $this->privateReceiver;
    }

    /**
     * @param boolean $privateReceiver
     */
    public function setPrivateReceiver($privateReceiver)
    {
        $this->privateReceiver = (bool) $privateReceiver;
    }

    /**
     * @return boolean
     */
    public function isPrivateSender()
    {
        return $this->privateSender;
    }

    /**
     * @param boolean $privateSender
     */
    public function setPrivateSender($privateSender)
    {
        $this->privateSender = (bool) $privateSender;
    }

    /**
     * @return boolean
     */
    public function isRod()
    {
        return $this->rod;
    }

    /**
     * @param boolean $rod
     */
    public function setRod($rod)
    {
        $this->rod = (bool) $rod;
    }

    /**
     * @return boolean
     */
    public function isSelfCollection()
    {
        return $this->selfCollection;
    }

    /**
     * @param boolean $selfCollection
     */
    public function setSelfCollection($selfCollection)
    {
        $this->selfCollection = (bool) $selfCollection;
    }

    /**
     * @return boolean
     */
    public function isSending1719()
    {
        return $this->sending1719;
    }

    /**
     * @param boolean $sending1719
     */
    public function setSending1719($sending1719)
    {
        $this->sending1719 = (bool) $sending1719;
    }

    /**
     * @return boolean
     */
    public function isSending1722()
    {
        return $this->sending1722;
    }

    /**
     * @param boolean $sending1722
     */
    public function setSending1722($sending1722)
    {
        $this->sending1722 = (bool) $sending1722;
    }

    /**
     * @return boolean
     */
    public function isSendingNotificationEmail()
    {
        return $this->sendingNotificationEmail;
    }

    /**
     * @param boolean $sendingNotificationEmail
     */
    public function setSendingNotificationEmail($sendingNotificationEmail)
    {
        $this->sendingNotificationEmail = (bool) $sendingNotificationEmail;
    }

    /**
     * @return boolean
     */
    public function isSendingNotificationPhone()
    {
        return $this->sendingNotificationPhone;
    }

    /**
     * @param boolean $sendingNotificationPhone
     */
    public function setSendingNotificationPhone($sendingNotificationPhone)
    {
        $this->sendingNotificationPhone = (bool) $sendingNotificationPhone;
    }

    /**
     * @return boolean
     */
    public function isSendingNotificationSms()
    {
        return $this->sendingNotificationSms;
    }

    /**
     * @param boolean $sendingNotificationSms
     */
    public function setSendingNotificationSms($sendingNotificationSms)
    {
        $this->sendingNotificationSms = (bool) $sendingNotificationSms;
    }

    /**
     * @return boolean
     */
    public function isService0900()
    {
        return $this->service0900;
    }

    /**
     * @param boolean $service0900
     */
    public function setService0900($service0900)
    {
        $this->service0900 = (bool) $service0900;
    }

    /**
     * @return boolean
     */
    public function isService1000()
    {
        return $this->service1000;
    }

    /**
     * @param boolean $service1000
     */
    public function setService1000($service1000)
    {
        $this->service1000 = (bool) $service1000;
    }

    /**
     * @return boolean
     */
    public function isService1200()
    {
        return $this->service1200;
    }

    /**
     * @param boolean $service1200
     */
    public function setService1200($service1200)
    {
        $this->service1200 = (bool) $service1200;
    }

    /**
     * @return boolean
     */
    public function isSmsSendingNotification()
    {
        return $this->smsSendingNotification;
    }

    /**
     * @param boolean $smsSendingNotification
     */
    public function setSmsSendingNotification($smsSendingNotification)
    {
        $this->smsSendingNotification = (bool) $smsSendingNotification;
    }

    /**
     * @return boolean
     */
    public function isUnloading()
    {
        return $this->unloading;
    }

    /**
     * @param boolean $unloading
     */
    public function setUnloading($unloading)
    {
        $this->unloading = (bool) $unloading;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param mixed $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return string
     */
    public function getCodType()
    {
        return $this->codType;
    }

    /**
     * @param string $codType
     */
    public function setCodType($codType)
    {
        $this->codType = $codType;
    }
}