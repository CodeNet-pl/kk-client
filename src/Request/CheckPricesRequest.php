<?php
namespace CodeNet\KKClient\Request;

use CodeNet\KKClient\Request;
use CodeNet\KKClient\Resource\Package;

class CheckPricesRequest extends Request
{
    /**
     * @var string
     */
    protected $packageType;

    /**
     * @var string
     */
    protected $senderCountry;

    /**
     * @var string
     */
    protected $senderPostCode;

    /**
     * @var string
     */
    protected $receiverCountry;

    /**
     * @var string
     */
    protected $receiverPostCode;

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
     * @return \CodeNet\KKClient\Resource\Package[]
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @param Package[] $package
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
    public function getReceiverCountry()
    {
        return $this->receiverCountry;
    }

    /**
     * @param string $receiverCountry
     */
    public function setReceiverCountry($receiverCountry)
    {
        $this->receiverCountry = $receiverCountry;
    }

    /**
     * @return string
     */
    public function getReceiverPostCode()
    {
        return $this->receiverPostCode;
    }

    /**
     * @param string $receiverPostCode
     */
    public function setReceiverPostCode($receiverPostCode)
    {
        $this->receiverPostCode = $receiverPostCode;
    }

    /**
     * @return string
     */
    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    /**
     * @param string $senderCountry
     */
    public function setSenderCountry($senderCountry)
    {
        $this->senderCountry = $senderCountry;
    }

    /**
     * @return string
     */
    public function getSenderPostCode()
    {
        return $this->senderPostCode;
    }

    /**
     * @param string $senderPostCode
     */
    public function setSenderPostCode($senderPostCode)
    {
        $this->senderPostCode = $senderPostCode;
    }
}