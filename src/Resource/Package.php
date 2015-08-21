<?php
namespace CodeNet\KKClient\Resource;

use CodeNet\KKClient\Resource;

class Package extends Resource
{
    /**
     * @var float
     */
    protected $length;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    /**
     * @var bool
     */
    protected $unsortableShape = false;

    /**
     * @var float
     */
    protected $dimensionalWeight;

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getUnsortableShape()
    {
        return $this->unsortableShape;
    }

    /**
     * @param string $unsortableShape
     */
    public function setUnsortableShape($unsortableShape)
    {
        $this->unsortableShape = (bool) $unsortableShape;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getDimensionalWeight()
    {
        return $this->dimensionalWeight;
    }

    /**
     * @param float $dimensionalWeight
     */
    public function setDimensionalWeight($dimensionalWeight)
    {
        $this->dimensionalWeight = $dimensionalWeight;
    }


}