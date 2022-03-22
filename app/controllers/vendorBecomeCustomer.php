<?php

class VendorBecomeCustomer extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model("vendorBecomeCustomerModel");
    }

    public function index(){
            $userId = $this->getSession("userId");
            $this->user->changeUserRole($userId);
            $this->setSession("type","customer");
            $this->redirect("customerHome");
    }

}