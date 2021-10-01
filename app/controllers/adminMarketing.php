<?php

class AdminMarketing extends FrameworkPartyak
{

    public function __construct()
    {
        $this->helper("linker");
    }

    public function index()
    {



        $this->view("admin/adminMarketingView");
    }
}