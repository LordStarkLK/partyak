<?php

class VendorRegister extends FrameworkPartyak
{
    public function __construct()
    {
        //include this to use css, js, picture path functions in the view file
        $this->helper("linker");

        //include this to call CRUD functions from the controller files
        $this->registerModel = $this->model("VendorRegisterModel");
    }

    public function index()
    {
        //initilaize these varibles for server validation
        $errors = array();
        $errors["fname"] = "";
        $errors["lname"] = "";
        // $errors["username"] = "";
        $errors["type"] = "";
        $errors["email"] = "";
        $errors["password"] = "";
        $errors["confirmPassword"] = "";
        $errors["agree"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            // $username = $_POST["username"];
            $type = $_POST["type"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmPassword = $_POST["confirmPassword"];
            if (isset($_POST["agree"])) {
                $agree = $_POST["agree"];
            } else {
                $agree = "off";
            }


            //Empty check
            if (empty($fname)) $errors["fname"] = "First Name is required";
            if (empty($lname)) $errors["lname"] = "Last Name is required";
            // if (empty($username)) $errors["username"] = "Username is required";
            if ($type == "null") $errors["type"] = "Type is required";
            if (empty($email)) $errors["email"] = "Email is required";
            if (empty($password)) $errors["password"] = "Password is required";
            if (empty($confirmPassword)) $errors["confirmPassword"] = "Confirm Password is required";
            if ($agree == "off") {
                $errors["agree"] = "Please check this box if you want to proceed";
            }

            //Password match checked
            if (!empty($password) && !empty($confirmPassword) && $password != $confirmPassword) {
                $errors["confirmPassword"] = "Please make sure your passwords match";
            }

            //Unique check
            // if ($this->registerModel->usernameCheck($username)) {
            //     $errors["username"] = "Username is already exists";
            // }

            if ($this->registerModel->emailCheck($email)) {
                $errors["email"] = "Email already exists";
            }

            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }



            if ($numberOfErrors == 0) {
                //Encrypy password
                $password = password_hash($password, PASSWORD_DEFAULT);

                //Insert data
                $this->registerModel->addVendor($fname, $lname, $type, $email, $password);
            }
        }

        $data["errors"] = $errors;
        $this->view("vendorRegisterView", $data);
    }
}
