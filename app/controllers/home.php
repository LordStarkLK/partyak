<?php

class Home extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->homeModel = $this->model('homeModel');
    }

    public function index()
    {
        // echo "Hi";
        $data['marketingContent'] = $this->homeModel->getMarketingContent();
        $this->view("homeView",$data); 
    }

    public function signup()
    {
        $this->view("customerRegisterView");
    }
}
