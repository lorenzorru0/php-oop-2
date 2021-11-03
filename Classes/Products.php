<?php
class Products {
    private $brand;
    private $price;

    /** 
     * __construct
     * 
     * @param string $_brand
     * @param int $_price
     */
    function __construct($_brand, $_price)
    {
        $this->brand = $_brand;
        $this->price = $_price;
    }

    function getBrand()
    {
        return $this->brand;
    }

    function getPrice()
    {
        return $this->price;
    }
}