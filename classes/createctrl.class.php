<?php


class CreateCtrl extends Create {


    private $proj_name;
    private $tech_used;
    private $app_feat;
    private $github_url;
    private $live_url;
    private $proj_desc;
    private $preview;
    private $files;


    public function __construct($proj_name, $tech_used, $app_feat, $github_url, $live_url, $proj_desc, $files, $preview) {
        $this->proj_name = $proj_name;
        $this->github_url = $github_url;
        $this->live_url = $live_url;
        $this->proj_desc = $proj_desc;
        $this->preview = $preview;
        $this->files = $files;

        $tech_arr = explode(", ",$tech_used);
        $feat_arr = explode(", ",$app_feat);

        $this->tech_used = $tech_arr;
        $this->app_feat = $feat_arr;
    }

    // public function test() {


    //     print_r($this->files["tmp_name"]);
    // }

    public function insertProj() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../create.php?error=emptyinput");
             exit();
        }

        $this->setProj($this->proj_name, $this->github_url, $this->live_url, $this->proj_desc, $this->preview);
        $this->setProjTech($this->proj_name, $this->github_url, $this->tech_used);
        $this->setProjFeat($this->proj_name, $this->github_url, $this->app_feat);

        $total_count = count($this->files["name"]);
        $this->fileName($this->files, $total_count, $this->proj_name, $this->github_url);
    }

    private function emptyInput() {
        $result;
        if(empty($this->proj_name) || empty($this->tech_used) || empty($this->app_feat)  || empty($this->github_url) || empty($this->live_url) || empty($this->proj_desc)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    



}

