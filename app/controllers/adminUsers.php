<?php

class AdminUsers extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserModel');
    }
    
    public function index(){
        
        $data['customers'] = $this->user->getCustomers();
        $data['customer_email'] = $this->user->getCustomerEmail();
        // echo "$data[customers]";
        // $this->preventBack("admin");
        $this->view("admin/adminUsersView",$data);
    }

}