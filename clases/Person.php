<?php

class Person {

    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function toString(){
        return $this->firstName . ' '. $this->lastName;
    }

}

$persona = new Person('David', 'Cadillo');
echo 'Su nombre completo es '. $persona->toString();
