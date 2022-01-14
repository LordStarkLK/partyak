<?php

class AdminPaymentVendor extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->paymentModel = $this->model("adminPaymentVendorModel");
    }

    public function index(){
        $data["request"] = $this->paymentModel->getRequest();
        $this->view("admin/adminPaymentRequestsView",$data);
    }
}