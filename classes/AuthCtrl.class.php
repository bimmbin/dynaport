<?php


class AuthCtrl extends Auth {

    private $ipadd;

    public function __construct($ipadd) {
        $this->ipadd = $ipadd;

    }

   
    public function ipBel5() {
        return $this->ipBelow5($this->ipadd);
    }

    public function ipRowGreater5() {
        return $this->ipGreater5($this->ipadd);
    }
}