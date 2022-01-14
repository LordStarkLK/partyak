<?php

class AdminPayment extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->paymentModel = $this->model("adminPaymentModel");
    }

    public function index(){
        $data["payment"] = $this->paymentModel->getPayment();
        $data["customer"] = $this->paymentModel->getCustomer();
        $data["package"] = $this->paymentModel->getPackage();
        $data["service"] = $this->paymentModel->getService();
        $this->view("admin/adminPaymentView",$data);
    }
}