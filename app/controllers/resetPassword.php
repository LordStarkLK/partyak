<?php

class ResetPassword extends FrameworkPartyak{
    public function __construct(){
        $this->helper('linker');

    }

    public function index(){
        $this->view("otpView");
    }


}

?>