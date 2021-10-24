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
}
