<?php

require_once __DIR__ . '/../Users.php';

class PremiumUsers extends Users {
    private $livello;

    /**
     * __construct
     * 
     * @param int $_livello
     */
    function __construct($_name, $_surname, $_email, $_birth_day, $_livello)
    {
        parent::__construct($_name, $_surname, $_email, $_birth_day);
        $this->livello = $_livello;
    }

    function setLivello($_livello) 
    {
        $this->livello = $_livello;
    }

    function getLivello()
    {
        return $this->livello;
    }

    function setSconto()
    {
        if( !is_int($this->livello) || $this->livello > 3) {
            throw new Exception('Il valore passato non è valido');
        } 
        switch($this->livello) {
            case 1:
                $this->sconto = 5;
                break;
            case 2:
                $this->sconto = 10;
                break;
            case 3:
                $this->sconto = 15;
                break;
        }
    }
}