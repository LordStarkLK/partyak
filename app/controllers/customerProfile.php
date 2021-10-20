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


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $fname = $_POST["f_name"];
            $lname = $_POST["l_name"];
            $email = $_POST["email"];
            $nic = $_POST["nic"];
            $gender = $_POST["gender"];
            $address = $_POST["address"];

        
            $this->user->updateProfile($fname, $lname, $nic, $gender, $address, $id);
           
            $this->user->updateEmail( $email, $id);

        }

        $data['profile'] = $this->user->getProfile($id);
        $data['cus_email'] = $this->user->getCustomerEmail($id);
        $this->view("customer/customerProfileView",$data);
    }

}