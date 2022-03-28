<?php 

class AdminTandC extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user= $this->model('adminTandCModel');
        $this->preventBack("admin");
    }
    
    public function index(){

        $errors = array();
        $errors["title"] = "";
        $errors["content"] = "";

        // for the update section
        IF($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["id"] != "insert"){
            $title = $_POST["title"];
            $content = $_POST["content"];
            $id = $_POST["id"];

            if(empty($title)) $errors["title"] = "Title is required";
            if(empty($content)) $errors["content"] = "Title is required";

            $numberOfErrors = 0;
                foreach($errors as $key  => $value){
                    if($value != ""){
                        $numberOfErrors++;
                    }
                }

                if($numberOfErrors == 0){
                    $this->user->updateTandC($title,$content,$id);
                }



            
           
        }

        // for the insert new section
        IF($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["id"] == "insert"){
            $title = $_POST["title"];
            $content = $_POST["content"];
            // $id = $_POST["id"];

            if(empty($title)) $errors["title"] = "Title is required";
            if(empty($content)) $errors["content"] = "Content is required";

            $numberOfErrors = 0;
                foreach($errors as $key  => $value){
                    if($value != ""){
                        $numberOfErrors++;
                    }
                }

                if($numberOfErrors == 0){
                    $this->user->addTandC($title,$content);
                }
            
            // $this->user->addTandC($title,$content);
        }

        $data["errors"] = $errors;
        $data['tandc'] = $this->user->getTandC();

        $this->view("admin/adminTandCView",$data);
    }
}

?>