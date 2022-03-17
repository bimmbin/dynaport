<?php


class CreateView extends Create {



    public function showProj($tbName) {
        $showEm = $this->fetchEm($tbName);
        return $showEm;
    }
}