<?php

class AdminUserProfile extends FrameworkPartyak{
    
    public function __construct(){
        $this->helper("linker");
        $this->user = $this->model('adminUserModel');
        $this->preventBack("admin");
    }
    
    public function index($id){
        

        $data['user'] = $this->user->getUserProfile($id);
        if($data['user']['user_type'] == 'vendor'){
            
            $data['vendor'] = $this->user->vendorDetails($id);

        }
        

        // $data['customer_email'] = $this->user->getCustomerEmail();
        // echo "$data[customers]";
        // $this->preventBack("admin");
        $this->view("admin/UserProfileView",$data);
    }

    

}