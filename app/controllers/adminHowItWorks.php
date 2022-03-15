<?php 

class AdminHowItWorks extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user= $this->model('adminHowItWorksModel');
        $this->preventBack("admin");
    }
    
    public function index(){

        // IF($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["id"] != "insert"){
        //     $title = $_POST["title"];
        //     $content = $_POST["content"];
        //     $id = $_POST["id"];
            
        //     $this->user->updateTandC($title,$content,$id);
        // }

        // IF($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["id"] == "insert"){
        //     $title = $_POST["title"];
        //     $content = $_POST["content"];
        //     // $id = $_POST["id"];
            
        //     $this->user->addTandC($title,$content);
        // }
        // $data['tandc'] = $this->user->getTandC();

        $data['intro'] = $this->user->getIntro();
        $data['main_heading_unique'] = $this->user->getMainHeadingUnique();
        $data['unique_features'] = $this->user->getUniqueFeatures();
        $data['steps'] = $this->user->getSteps();
        $data['vendor_details'] = $this->user->getVendorDetails();
        $data['customer_details'] = $this->user->getCustomerDetails();

        $this->view("admin/adminHowItWorksView",$data);
    }
}

?>