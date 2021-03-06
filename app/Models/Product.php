<?php
namespace App\Models;

class Product implements ProductInterface
{
    /**
     * @var float $price
     */
    protected $_price;

    /**
     * @var float $weight
     */
    protected $_weight;


    /**
     * @var float $width
     */
    protected $_width;

    /**
     * @var float $height
     */
    protected $_height;

    /**
     * @var float $depth
     */
    protected $_depth;


    /**
     * @param float $_price
     * @param float $_weight
     * @param float $_width
     * @param float $_height
     * @param float $_depth
     */
    function __construct($_price = 0, $_weight = 0, $_width = 0, $_height = 0, $_depth = 0)
    {
        $this->_price = (float) $_price;
        $this->_weight = (float) $_weight;
        $this->_width = (float) $_width;
        $this->_height = (float) $_height;
        $this->_depth = (float) $_depth;
    }

    /**
     * Get price product.
     * @return float
     */
    public function getPrice()
    {
        return $this->_price;
    }


    /**
     * Get weight product.
     * @return float
     */
    public function getWeight()
    {
        return $this->_weight;
    }

    /**
     * Get width product.
     * @return float
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * Get height product.
     * @return float
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Get depth product.
     * @return float
     */
    public function getDepth()
    {
        return $this->_depth;
    }

    /**
     * Set price product.
     * @param $_price
     */
    public function setPrice($_price)
    {
        $this->_price = $_price;
    }

    /**
     * Set weight product.
     * @param $_weight
     */
    public function setWeight($_weight)
    {
        $this->_weight = $_weight;
    }

    /**
     * Set width product.
     * @param $_width
     */
    public function setWidth($_width)
    {
        $this->_width = $_width;
    }

    /**
     * Set Height product.
     * @param $_height
     */
    public function setHeight($_height)
    {
        $this->_height = $_height;
    }

    /**
     * Set depth product.
     * @param $_depth
     */
    public function setDepth($_depth)
    {
        $this->_depth = $_depth;
    }
}