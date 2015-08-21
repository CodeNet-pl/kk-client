<?php
namespace CodeNet\KKClient\Request;

use CodeNet\KKClient\Request;

class InpostMachinesRequest extends Request
{
    /**
     * @var bool
     */
    protected $cod;

    /**
     * @var string
     */
    protected $postCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }
}