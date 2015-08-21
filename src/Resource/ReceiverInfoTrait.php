<?php
namespace CodeNet\KKClient\Resource;

trait ReceiverInfoTrait
{
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
    protected $receiverStreet;

    /**
     * @var string
     */
    protected $receiverHouseNumber;

    /**
     * @var string
     */
    protected $receiverFlatNumber;

    /**
     * @var string
     */
    protected $receiverPostCode;

    /**
     * @var string
     */
    protected $receiverCity;

    /**
     * @var string
     */
    protected $receiverCountry;

    /**
     * @var string
     */
    protected $receiverPhone;


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
     * @return string
     */
    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    /**
     * @param string $receiverPhone
     */
    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone = $receiverPhone;
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
    public function getReceiverStreet()
    {
        return $this->receiverStreet;
    }

    /**
     * @param string $receiverStreet
     */
    public function setReceiverStreet($receiverStreet)
    {
        $this->receiverStreet = $receiverStreet;
    }


    /**
     * @return string
     */
    public function getReceiverCity()
    {
        return $this->receiverCity;
    }

    /**
     * @param string $receiverCity
     */
    public function setReceiverCity($receiverCity)
    {
        $this->receiverCity = $receiverCity;
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
    public function getReceiverFlatNumber()
    {
        return (string) $this->receiverFlatNumber;
    }

    /**
     * @param string $receiverFlatNumber
     */
    public function setReceiverFlatNumber($receiverFlatNumber)
    {
        $this->receiverFlatNumber = $receiverFlatNumber;
    }

    /**
     * @return string
     */
    public function getReceiverHouseNumber()
    {
        return (string) $this->receiverHouseNumber;
    }

    /**
     * @param string $receiverHouseNumber
     */
    public function setReceiverHouseNumber($receiverHouseNumber)
    {
        $this->receiverHouseNumber = $receiverHouseNumber;
    }
} 