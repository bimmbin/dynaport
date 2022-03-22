<?php


class DeleteCtrl extends Delete {

    private $proj_id;


    public function __construct($proj_id) {

        $this->proj_id = $proj_id;

    }

  

    public function deleteThis() {

        $this->deleteImg($this->proj_id);
        $this->delProj($this->proj_id);
    }



}