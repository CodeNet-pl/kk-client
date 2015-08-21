<?php
namespace CodeNet\KKClient\Request;

use CodeNet\KKClient\Request;
use CodeNet\KKClient\Resource;
use CodeNet\KKClient\Resource\Package;
use CodeNet\KKClient\Resource\Courier;

class CreateOrderRequest extends Request
{
    use Resource\SenderInfoTrait;
    use Resource\ReceiverInfoTrait;

    /**
     * @var int
     */
    protected $paymentType;

    /**
     * @var string
     */
    protected $packageType;

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
    protected $content;

    /**
     * @var Courier
     */
    protected $courier;

    /**
     * @var Package[]
     */
    protected $packages = array();

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
     * @param string $deliveryDate
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
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