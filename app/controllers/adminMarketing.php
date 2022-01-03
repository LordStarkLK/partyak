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

    public function online($content_id){
        // echo $content_id;
        $output = $this->marketingModel->onlineStatus($content_id);

        echo $output;
    }

    public function offline($content_id){
        $output = $this->marketingModel->offlineStatus($content_id);
        echo $output;
    }

}