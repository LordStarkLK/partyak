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
        $this->view("homeView");
    }

    public function changePassword()
    {
        $data["status"] = "passwordChanged";
        $this->preventBack("vendor");
        $this->view("homeView",$data);
    }
}
