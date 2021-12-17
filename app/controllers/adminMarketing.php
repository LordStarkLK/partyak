<?php

class AdminMarketing extends FrameworkPartyak
{

    public function __construct()
    {
        $this->helper("linker");
        $this->marketingModel = $this->model('adminMarketingModel');
        $this->preventBack("admin");

    }

    public function index()
    {
        $data['marketing'] = $this->marketingModel->getMarketing();
        $data['user'] = $this->marketingModel->getUser();


        $this->view("admin/adminMarketingView",$data);
    }
}