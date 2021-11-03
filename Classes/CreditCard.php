<?php
class CreditCard
{
    private $number;
    private $startDate;
    private $endDate;
    private $cvv;

    /** 
     * __construct
     * 
     * @param string $_number
     * @param string $_startDate
     * @param string $_endDate
     * @param int $_cvv
     */
    function __construct($_number, $_startDate, $_endDate, $_cvv)
    {
        $this->number = $_number;
        $this->startDate = $_startDate;
        $this->endDate = $_endDate;
        $this->cvv = $_cvv;
    }

    function getNumber()
    {
        return $this->number;
    }

    function getStartDate()
    {
        return $this->startDate;
    }

    function getEndDate()
    {
        return $this->endDate;
    }

    function getCvv()
    {
        return $this->cvv;
    }
}
