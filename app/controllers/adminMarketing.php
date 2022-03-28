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
        // table details from marketing table
        $data['marketing'] = $this->marketingModel->getMarketing();
        // table details from user table
        $data['user'] = $this->marketingModel->getUser();


        $this->view("admin/adminMarketingView",$data);
    }

    // Change status to online
    public function online($content_id){
        // echo $content_id;
        $output = $this->marketingModel->onlineStatus($content_id);

        echo $output;
    }

    // Change status to offline
    public function offline($content_id){
        $output = $this->marketingModel->offlineStatus($content_id);
        echo $output;
    }

    // Change status to accepted
    public function accept($content_id){
        $output = $this->marketingModel->acceptStatus($content_id);
        echo $output;
    }

    // Change status to rejected
    public function reject($content_id){
        $output = $this->marketingModel->rejectStatus($content_id);
        echo $output;
    }

    // deleting the content
    public function delete($content_id){
        $this->marketingModel->delete($content_id);
        $this->redirect("adminMarketing");
    }




}