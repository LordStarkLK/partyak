<?php 

class AdminTandC extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user= $this->model('adminTandCModel');
    }
    
    public function index(){

        IF($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["id"] != "insert"){
            $title = $_POST["title"];
            $content = $_POST["content"];
            $id = $_POST["id"];
            
            $this->user->updateTandC($title,$content,$id);
        }

        IF($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["id"] == "insert"){
            $title = $_POST["title"];
            $content = $_POST["content"];
            // $id = $_POST["id"];
            
            $this->user->addTandC($title,$content);
        }
        $data['tandc'] = $this->user->getTandC();

        $this->view("admin/adminTandCView",$data);
    }
}

?>