<?php
require_once __DIR__ . '/../Products.php';

class Pants  extends Products {
    private $sizePants;
    private $type;


    /** 
     * __construct
     * 
     * @param int $_sizePants
     * @param string $_type
     */
    function __construct($_sizePants, $_type, $_brand, $_price)
    {
        parent::__construct($_brand, $_price);
        $this->sizePants = $_sizePants;
        $this->type = $_type;
    }

    function getSizePants()
    {
        return $this->sizePants;
    }

    function getType()
    {
        return $this->type;
    }

}