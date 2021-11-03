<?php
class Users {
    private $name;
    private $surname;
    private $email;
    private $birth_day;
    protected $sconto = 0;

    /** 
     * __construct
     * 
     * @param string $_name
     * @param string $_surname
     * @param string $_email
     * @param string $_birth_day
     */
    function __construct($_name, $_surname, $_email, $_birth_day)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->birth_day = $_birth_day;
    }

    function getName()
    {
        return $this->name;
    }

    function getSurname()
    {
        return $this->surname;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getBirthDay()
    {
        return $this->birth_day;
    }
}