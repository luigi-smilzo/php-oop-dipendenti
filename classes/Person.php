<?php
class Person {
    // Properties
    public $id;
    public $firstName;
    public $lastName;
    public $age;

    function __construct($_id, $_firstName, $_lastName, $_age) {
        $this->id = $_id;
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->age =$_age;
    }
}