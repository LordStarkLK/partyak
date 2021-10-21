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

        $errors = array();
        $errors["f_name"] = "";
        $errors["l_name"] = "";
        $errors["email"] = "";


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $fname = $_POST["f_name"];
            $lname = $_POST["l_name"];
            $email = $_POST["email"];
            $nic = $_POST["nic"];
            $gender = $_POST["gender"];
            $address = $_POST["address"];

            //Empty check
            if (empty($fname)) $errors["f_name"] = "First name is required";
            if (empty($lname)) $errors["l_name"] = "Last name is required";
            if (empty($email)) $errors["email"] = "Email is required";

            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->user->updateProfile($fname, $lname, $nic, $gender, $address, $id);
           
                $this->user->updateEmail( $email, $id);
            }


        }

        $data['profile'] = $this->user->getProfile($id);
        $data['cus_email'] = $this->user->getCustomerEmail($id);
        $this->view("customer/customerProfileView",$data);
    }

}