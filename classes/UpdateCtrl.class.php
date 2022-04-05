<?php


class UpdateCtrl extends Update {

    private $proj_id;


    private $proj_name;
    private $tech_used;
    private $app_feat;
    private $github_url;
    private $live_url;
    private $proj_desc;
    private $preview;
    private $files;


    public function __construct($proj_name, $tech_used, $app_feat, $github_url, $live_url, $proj_desc, $files, $preview, $proj_id) {
        $this->proj_name = $proj_name;
        $this->github_url = $github_url;
        $this->live_url = $live_url;
        $this->proj_desc = $proj_desc;
        $this->preview = $preview;
        $this->files = $files;
        $this->proj_id = $proj_id;

        $tech_arr = explode("/",$tech_used);
        $feat_arr = explode("/",$app_feat);

        $this->tech_used = $tech_arr;
        $this->app_feat = $feat_arr;
    }

    // public function __construct($proj_id) {

    //     $this->proj_id = $proj_id;

    // }

    public function updateProject() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../create.php?error=emptyinput");
             exit();
        }
        if(!empty($this->preview["name"])) {
            $this->updatePrevImg('project_imgfeat', 'project', $this->preview, $this->proj_id);
        }
        if(!empty($this->tech_used)) {
            $this->deleteTech($this->proj_id);
            $this->updateTech($this->tech_used, $this->proj_id);
        }
        if(!empty($this->app_feat)) {
            $this->deleteFeat($this->proj_id);
            $this->updateFeat($this->app_feat, $this->proj_id);
        }
        if(!empty($this->files["name"][0])) {
            $this->deleteImgData($this->proj_id);
            $this->deleteImg('img_name', 'project_img', $this->proj_id);
            $this->updateInsideImg($this->files, $this->proj_id);
        }

        $this->updateProj('project_name', $this->proj_name, $this->proj_id);
        $this->updateProj('project_desc', $this->proj_desc, $this->proj_id);
        $this->updateProj('github_url', $this->github_url, $this->proj_id);
        $this->updateProj('live_url', $this->live_url, $this->proj_id);
   
        // $total_count = count($this->files["name"]);
        // $this->fileName($this->files, $total_count, $this->proj_name, $this->github_url);
    }

    public function deleteThis() {

        $this->deleteImg($this->proj_id);
        $this->delProj($this->proj_id);
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