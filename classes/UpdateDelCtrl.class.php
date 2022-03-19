<?php


class UpdateDelCtrl extends UpdateDel {

    private $proj_id;


    public function __construct($proj_id) {
        $this->proj_id = $proj_id;

    }


    public function deleteThis() {

        $this->delProj($this->proj_id);

    }

}