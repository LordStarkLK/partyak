<?php

class Login extends FrameworkPartyak
{
    public function __construct()
    {
        $this->loginModel = $this->model("loginModel");
        $this->helper("linker");

        //need to add log fime and mail(if needed) file

    }
    public function index()
    {
        //Initially no errors
        $errors = array();
        $errors['email'] = "";
        $errors['password'] = "";

        $data['errors'] = $errors;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Get data from the form
            $email = $_POST['email'];
            $password = $_POST['password'];

            //Form validation - start 
            if (empty($email)) {
                $errors['email'] = "Email is required";
            }

            if (empty($password)) {
                $errors['password'] = "Password is required";
            }

            //Form validation - end   

            if (!empty($email) && !empty($password)) {

                //Check login password

                $user = $this->loginModel->passwordCheck($email, $password);
                if ($user) {
                    $this->setSession("userId", $user["user_id"]);
                    $this->setSession("type", $user["user_type"]);

                    // After a succesful login directing to dashboard
                    $this->redirect("dashboard");
                } else {
                    $errors["password"] = "Invalid Login! - wrong email or password";
                }
            } else {
                $data['errors'] = $errors;
                $this->view("loginView", $data);
            }
        }





        $data['errors'] = $errors;
        $this->view("loginView", $data);
    }
}
