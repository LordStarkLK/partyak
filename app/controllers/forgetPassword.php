<?php

class ForgetPassword extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->forgetPasswordModel = $this->model("forgetPasswordModel");

    }

    public function index(){
        $errors["email"] = "";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST["email"];

            if(empty($email)){
                $errors["email"] = "Email is required";
            } else if(!($this->forgetPasswordModel->emailCheck($email))){
                $errors["email"] = "Email does not exist";
            }

            $numberOfErrors = 0;
            foreach($errors as $key => $value){
                if($value != ""){
                    $numberOfErrors++;
                }
            }

            if($numberOfErrors == 0){
                $otp = mt_rand(100000, 999999);
                $this->setSession("otp",$otp);
                $this->setSession("email",$email);
                

                $this->sendOTP();
                // $data["email"] =$email;

                return true;

            }


        }

        $data["errors"] = $errors;

        $this->view("forgetPasswordView",$data);
    }

    public function otpCheck(){
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $input = $_POST["input1"] . $_POST["input2"] . $_POST["input3"] .
                $_POST["input4"] . $_POST["input5"] . $_POST["input6"];

            $otp = $this->getSession("otp");
            $data["email"] = $this->getSession("email");

            // $data["email"] = $email;
            if($otp == $input){
                $this->unsetSession("otp");

                $errors["password1"] = "";
                $errors["password2"] = "";

                $data["errors"] = $errors;

                $this->view("resetPasswordView", $data);
            } else{
                $data["error"] = "OTP Mismatched";

                $this->view("otpView",$data);
            }


        }
    }

    public function changePassword(){
        if($_SERVER["REQUEST_METHOD"] = "POST"){
            $errors["password1"] = "";

            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];

            $errors["password1"] = "";
            $errors["password2"] = "";

            if(empty($password1)){
                $errors["password1"] = "Password is required";

            }

            if(empty($password2)){
                $errors["password2"] = "Confirm password is required";
            } else if($password1 != $password2){
                $errors["password2"] = "Password Mismatched";
            }

            $numberOfErrors = 0;
            foreach ($errors as $key => $value){
                if($value != ""){
                    $numberOfErrors++;
                }
            }

            if($numberOfErrors == 0){
                // echo "Hi";  
                $email = $this->getSession("email");
                $user_id = $this->forgetPasswordModel->getUserId($email);
                $user_type = $this->forgetPasswordModel->getUserType($email);
                
                $this->unsetSession("email");

                if($this->forgetPasswordModel->changePassword($email,$password1)){
                    // echo "Hi - ";
                    $this->setSession("userId",$user_id["user_id"]);
                    $this->setSession("type",$user_type["user_type"]);
                
                    // $this->view("VendorHomeView");
                // After a succesful login directing to dashboard
                    $this->redirect("dashboard/changePassword");

                    
                }
            }else{
                $data["errors"] = $errors;

                $this->view("resetPasswordView",$data);
            }



        }
    }

    public function sendOTP(){
        $email = $this->getSession("email");
        $otp = $this->getSession("otp");
        $data["email"] = $email;

        $emailBody = '
        <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Partyak</a>
      <br />
      <a style="font-size:1.0em;color: #00466a;text-decoration:none;font-weight:600">Your one stop event management destination</a>
    </div>
    <p style="font-size:1.1em">Hi '. $email .',</p>
    <p>Thank you for choosing Partyak. Use the following OTP to complete your forgot password procedures.</p>
    <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">' . $otp . '</h2>
    <p style="font-size:0.9em;">Regards,<br />PARTYAK</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>PARTYAK,</p>
      <p>UCSC Building,</p>
      <p>35 Reid Ave,</p>
      <p>Colombo 00700.</p>

    </div>
  </div>
</div>';

        $emailSubject = "Partyak : Password Change";
        $header = "From: partyakmail@gmail.com\r\nContent-Type: text/html;";

        $send_mail_result = mail($email,$emailSubject,$emailBody,$header);

        $data["error"] = "";
        // $data["email"] = $email;

        $this->view("otpView",$data);

        return true;

        
        
        
        
    }


}

?>