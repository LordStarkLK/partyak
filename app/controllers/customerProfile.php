<?php

class CustomerProfile extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('customerProfileModel');
        $this->preventBack2();
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
        $data['profileimage'] = $this->user->checkOlderDP($id);
        $this->view("customer/customerProfileView",$data);
    }

    public function resetPassword(){
        $errors["password1"] = "";
        $errors["password2"] = "";

        $data["errors"] = $errors;

        $this->view("resetPasswordView", $data);
    }

    public function handleThePicture()
    {
        $id=$_SESSION['userId']; 
        $row = $this->user->checkOlderDP($id);

        //check whether there is an older profile picture
        if ($row['profilePicture']) {
            //delete the older profile picture from the system folder
            unlink("../public/img/userImages/" . $row['profilePicture'] . "");
        }

        if (isset($_POST['saveButton'])) {

            //retrieving user entered data from the form
            if (!empty($_FILES["imageUpload"]["name"])) //the user have uploaded a new image
            {
                //Process the new image that is uploaded by the user
                $target_dir = "../public/img/userImages/";
                $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $filename = $_FILES["imageUpload"]["name"];

                move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file);

                $timestamp = time();
                $image = $id . $timestamp . "." . $imageFileType; //generating an unique name to the image file
                rename("../public/img/userImages/$filename", "../public/img/userImages/$image"); //adding the generated name to the file

                //Update the database with the new picture and delete the older profile picture from database
                $this->user->updateNewDP($image, $id);
            } else {
                //set the default one as the DP
                $this->user->deleteDP($id);
            }
        }
        $this->redirect('customerProfile');
    }

}

?>