<?php

require_once __DIR__ . '/../Users.php';

class Employee extends Users
{
    /**
     * __construct
     * 
     * @param int $_livello
     */
    function __construct($_name, $_surname, $_email, $_birth_day, $_creditCard = [])
    {
        parent::__construct($_name, $_surname, $_email, $_birth_day, $_creditCard);
    }

    function setSconto()
    {
        $this->sconto = 20;
    }
}