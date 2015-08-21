<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Resource\SenderInfoTrait;
use CodeNet\KKClient\Response;

class ProfileResponse extends Response
{
    use SenderInfoTrait;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $tin;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $houseNumber;

    /**
     * @var string
     */
    protected $flatNumber;

    /**
     * @var string
     */
    protected $postCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $bankAccount;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $invoices;

    /**
     * @var string
     */
    protected $balance;

    /**
     * @var string
     */
    protected $discount;

    /**
     * @var string
     */
    protected $zebra;

    /**
     * @var string
     */
    protected $newsletter;

    /**
     * @return float
     */
    public function getBalance()
    {
        return (float) $this->balance;
    }

    /**
     * @param string $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
        return (string) $this->bankAccount;
    }

    /**
     * @param string $bankAccount
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * @param string $tin
     */
    public function setTin($tin)
    {
        $this->tin = $tin;
    }

    /**
     * @return string
     */
    public function getZebra()
    {
        return $this->zebra;
    }

    /**
     * @param string $zebra
     */
    public function setZebra($zebra)
    {
        $this->zebra = $zebra;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return (string) $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return (string) $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getDiscount()
    {
        return (float) $this->discount;
    }

    /**
     * @param string $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return (string) $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFlatNumber()
    {
        return (string) $this->flatNumber;
    }

    /**
     * @param string $flatNumber
     */
    public function setFlatNumber($flatNumber)
    {
        $this->flatNumber = $flatNumber;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return (string) $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getInvoices()
    {
        return (int) $this->invoices;
    }

    /**
     * @param string $invoices
     */
    public function setInvoices($invoices)
    {
        $this->invoices = $invoices;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param boolean $newsletter
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = (bool) $newsletter;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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