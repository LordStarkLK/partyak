<?php

    class CustomerRegister extends FrameworkPartyak
    {
        public function __construct()
        {
                //include this to use css, js, picture path functions in the view file
            $this->helper("linker");

            // including to call the model object related
            $this->registerModel = $this->model("CustomerRegisterModel");
        }

        public function index(){

            // initializing variables for validation
            $errors = array();
            $errors["fname"] = "";
            $errors["lname"] = "";
            // $errors["username"] = "";
            $errors["address"] = "";
            $errors["email"] = "";
            $errors["password"] = "";
            $errors["confirmPassword"] = "";
            $errors["agree"] = "";

            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                // Data from the form submission
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                // $username = $_POST["username"];
                $address = $_POST["address"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirmPassword = $_POST["confirmPassword"];
                if(isset($_POST["agree"])){
                    $agree = $_POST["agree"];
                }else{
                    $agree = "off";
                }

                // check empty
                if(empty($fname)) $errors["fname"] = "First name is required";
                if(empty($lname)) $errors["lname"] = "Last name is required";
                // if(empty($username)) $errors["username"] = "username is required";
                if(empty($address)) $errors["address"] = "Address is required";
                if(empty($fname)) $errors["email"] = "Email is required";
                if(empty($password)) $errors["password"] = "Password is required";
                if(empty($confirmPassword)) $errors["confirmPassword"] = "Confirmed password is required";
                if($agree == "off") {
                    $errors["agree"] = "Please tick is box if you want to proceed";
                }
                
                // password match checked
                if(!empty($password) && !empty($confirmPassword) && ($password != $confirmPassword))
                {
                    $errors["confirmPassword"] = "Please make sure that your passwords match";

                }

                // unique username check
                // if($this->registerModel->usernameCheck($username)){
                //     $errors["username"] = "Username already exists";
                // }

                // unique email check
                if($this->registerModel->emailCheck($email)){
                    $errors["email"] = "Email already exists";
                }

                // Count validation errors
                $numberOfErrors = 0;
                foreach($errors as $key  => $value){
                    if($value != ""){
                        $numberOfErrors++;
                    }
                }

                if($numberOfErrors == 0){
                    // encrpyt password
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    // Inserting data
                    $this->registerModel->addCustomer($fname,$lname,$address,$email,$password);


                }
                
                

                

            }




            $data["errors"] = $errors;
            $this->view("customerRegisterView", $data);
        }
       

    }