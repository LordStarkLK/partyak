<?php

class VendorHome extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
    }

    public function index()
    {
        $this->preventBack("vendor");
        $data["user_id"] = $this->getSession("userId");
        $this->view("homeView",$data);
    }

    public function changePassword()
    {
        $data["status"] = "passwordChanged";
        $this->preventBack("vendor");
        $this->view("homeView",$data);
    }
}
