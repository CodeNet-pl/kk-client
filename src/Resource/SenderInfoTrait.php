<?php
namespace CodeNet\KKClient\Resource;

trait SenderInfoTrait
{
    /**
     * @var string
     */
    protected $senderName;

    /**
     * @var string
     */
    protected $senderLastName;

    /**
     * @var string
     */
    protected $senderCompany;

    /**
     * @var string
     */
    protected $senderStreet;

    /**
     * @var string
     */
    protected $senderHouseNumber;

    /**
     * @var string
     */
    protected $senderFlatNumber;

    /**
     * @var string
     */
    protected $senderPostCode;

    /**
     * @var string
     */
    protected $senderCity;

    /**
     * @var string
     */
    protected $senderCountry;

    /**
     * @var string
     */
    protected $senderPhone;


    /**
     * @return string
     */
    public function getSenderLastName()
    {
        return $this->senderLastName;
    }

    /**
     * @param string $senderLastName
     */
    public function setSenderLastName($senderLastName)
    {
        $this->senderLastName = $senderLastName;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param string $senderName
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * @return string
     */
    public function getSenderPhone()
    {
        return $this->senderPhone;
    }

    /**
     * @param string $senderPhone
     */
    public function setSenderPhone($senderPhone)
    {
        $this->senderPhone = $senderPhone;
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

    /**
     * @return string
     */
    public function getSenderStreet()
    {
        return $this->senderStreet;
    }

    /**
     * @param string $senderStreet
     */
    public function setSenderStreet($senderStreet)
    {
        $this->senderStreet = $senderStreet;
    }


    /**
     * @return string
     */
    public function getSenderCity()
    {
        return $this->senderCity;
    }

    /**
     * @param string $senderCity
     */
    public function setSenderCity($senderCity)
    {
        $this->senderCity = $senderCity;
    }

    /**
     * @return string
     */
    public function getSenderCompany()
    {
        return $this->senderCompany;
    }

    /**
     * @param string $senderCompany
     */
    public function setSenderCompany($senderCompany)
    {
        $this->senderCompany = $senderCompany;
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
    public function getSenderFlatNumber()
    {
        return (string) $this->senderFlatNumber;
    }

    /**
     * @param string $senderFlatNumber
     */
    public function setSenderFlatNumber($senderFlatNumber)
    {
        $this->senderFlatNumber = $senderFlatNumber;
    }

    /**
     * @return string
     */
    public function getSenderHouseNumber()
    {
        return (string) $this->senderHouseNumber;
    }

    /**
     * @param string $senderHouseNumber
     */
    public function setSenderHouseNumber($senderHouseNumber)
    {
        $this->senderHouseNumber = $senderHouseNumber;
    }
} 