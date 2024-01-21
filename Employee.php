<?php

class Employee
{
    public $surname;
    public $name;
    private $age;

    public function __construct($name="", $surname="", $age=0) {
        $this->name = $name;
        $this->surname = $surname;
        $this->set_age($age);
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_surname($surname)
    {
        $this->surname = $surname;
    }

    public function get_surname()
    {
        return $this->surname;
    }

    // Відкриті  методи
    public function get_age()
    {
        return $this->age;
    }

    public function set_age($val)
    {
        $val = intval($val);
        if ($val >= 18 && $val <= 65) {
            $this->age = $val;
            return true;
        } else {
            return false;
        }

    }

    public function get_info()
    {
        return $this->surname . " " . $this->name;
    }

    public function get_full_info()
    {
        return "{$this->get_info()} {$this->get_age()}";
    }

    public function checkUser($name, $surname)
    {
        return $this->name === $name && $this->surname === $surname;  
    }

    public function __toString(){
        return "{$this->get_info()} {$this->get_age()}";
    }
}