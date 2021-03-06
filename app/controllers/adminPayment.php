<?php

class AdminPayment extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->paymentModel = $this->model("adminPaymentModel");
    }

    public function index(){
        // details for the tables
        $data["payment"] = $this->paymentModel->getPayment();
        $data["customer"] = $this->paymentModel->getCustomer();
        $data["package"] = $this->paymentModel->getPackage();
        $data["service"] = $this->paymentModel->getService();
        $this->view("admin/adminPaymentView",$data);
    }

    public function search(){
        // POST taken from payment js
        $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $_POST['searchTerm']);

        // echo $searchTerm;
        $userList = $this->paymentModel->search($searchTerm);
        echo $userList;
    }

}