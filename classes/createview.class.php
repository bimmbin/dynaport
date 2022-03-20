<?php


class CreateView extends Create {



    public function showProj($tbName) {
        $showEm = $this->fetchEm($tbName);
        return $showEm;
    }

    public function showFetch($colName, $tbName, $col_id) {
        $showEm = $this->fetchImg($colName, $tbName, $col_id);
        return $showEm;
    }

    public function fetchSingleId($tbName, $col_id) {
        $showEm = $this->fetchSingleProject($tbName, $col_id);
        return $showEm;
    }
}