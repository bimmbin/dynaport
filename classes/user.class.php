<?php

class User {
    public $name;
    public $lastName;

    public function __construct($n, $l) {
        $this->name = $n;
        $this->lastName = $l;

        echo $this->name . '<br>';
        echo $this->lastName . '<br>';
    }
}