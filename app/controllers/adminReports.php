<?php

class AdminReports extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
    }

    public function index(){
        $this->view("admin/adminReportsView");
    }

    public function mostpopular(){
        $this->view("admin/reports/mostPopularView");
    }
}