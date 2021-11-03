<?php

require_once __DIR__ . '/../Products.php';

class Top extends Products {
    private $size;
    private $type;

    /** 
     * __construct
     * 
     * @param string $_size
     * @param string $_type
     */
    function
    __construct($_size, $_type, $_brand, $_price)
    {
        parent::__construct($_brand, $_price);
        $this->size = $_size;
        $this->type = $_type;
    }

    function getSize()
    {
        return $this->size;
    }

    function getType()
    {
        return $this->type;
    }

}