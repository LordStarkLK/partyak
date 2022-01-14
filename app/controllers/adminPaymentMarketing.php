<?php

class AdminPaymentMarketing extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->adminPaymentModel = $this->model("adminPaymentModel");
    }

    public function index(){
        $data["marketing"] = $this->adminPaymentModel->getMarketingPayment();
        $this->view("admin/adminPaymentMarketingView",$data);
    }
}