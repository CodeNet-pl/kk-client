<?php
namespace CodeNet\KKClient\Response;

use CodeNet\KKClient\Exception\InvalidArgumentException;
use CodeNet\KKClient\Response;

class CheckDataResponse extends Response
{
    /**
     * @var float
     */
    protected $grossPriceTotal;

    /**
     * @return float
     */
    public function getGrossPriceTotal()
    {
        return $this->grossPriceTotal;
    }

    /**
     * @param float $grossPriceTotal
     */
    public function setGrossPriceTotal($grossPriceTotal)
    {
        $this->grossPriceTotal = $grossPriceTotal;
    }
}