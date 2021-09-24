<?php

class Home extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
    }

    public function index()
    {
        // echo "Hi";
        $this->view("homeView");
    }

    public function signup()
    {
        $this->view("selectUserTypeView");
    }
}
