<?php


class CustomerProfile extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('customerProfileModel');
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");

        $id=$_SESSION['userId'];

        $data['profile'] = $this->user->getProfile($id);
        $data['cus_email'] = $this->user->getCustomerEmail($id);
        $this->view("customer/customerProfileView",$data);
    }

}