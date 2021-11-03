<?php
require_once __DIR__ . '/../Products.php';

class Shoes  extends Products
{
    private $sizeShoes;
    private $type;

    /** 
     * __construct
     * 
     * @param float $_sizeShoes
     * @param string $_type
     */
    function __construct($_sizeShoes, $_type, $_brand, $_price)
    {
        parent::__construct($_brand, $_price);
        $this->sizeShoes = $_sizeShoes;
        $this->type = $_type;
    }

    function getSizeShoes()
    {
        return $this->sizeShoes;
    }

    function getType()
    {
        return $this->type;
    }
}
