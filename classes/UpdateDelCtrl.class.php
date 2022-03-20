<?php


class UpdateDelCtrl extends UpdateDel {

    private $proj_id;


    // private $proj_name;
    // private $tech_used;
    // private $app_feat;
    // private $github_url;
    // private $live_url;
    // private $proj_desc;
    // private $preview;
    // private $files;


    // public function __construct($proj_name, $tech_used, $app_feat, $github_url, $live_url, $proj_desc, $files, $preview, $proj_id) {
    //     $this->proj_name = $proj_name;
    //     $this->github_url = $github_url;
    //     $this->live_url = $live_url;
    //     $this->proj_desc = $proj_desc;
    //     $this->preview = $preview;
    //     $this->files = $files;
    //     $this->proj_id = $proj_id;

    //     $tech_arr = explode(", ",$tech_used);
    //     $feat_arr = explode(", ",$app_feat);

    //     $this->tech_used = $tech_arr;
    //     $this->app_feat = $feat_arr;
    // }

    public function __construct($proj_id) {

        $this->proj_id = $proj_id;

    }

    // public function updateProj() {
    //     if($this->emptyInput() == false) {
    //         // echo "Empty input!";
    //         header("location: ../create.php?error=emptyinput");
    //          exit();
    //     }

    //     $this->setProj($this->proj_name, $this->github_url, $this->live_url, $this->proj_desc, $this->preview);
    //     $this->setProjTech($this->proj_name, $this->github_url, $this->tech_used);
    //     $this->setProjFeat($this->proj_name, $this->github_url, $this->app_feat);

    //     $total_count = count($this->files["name"]);
    //     $this->fileName($this->files, $total_count, $this->proj_name, $this->github_url);
    // }

    public function deleteThis() {

        $this->deleteImg($this->proj_id);
        $this->delProj($this->proj_id);
    }

}