<?php

class SpCalendar extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->spCalenderModel = $this->Model("spCalenderModel");

    }

    public function index($service_id)
    {
        $data['service_id']=$service_id;
        $id=$_SESSION['userId'];
        $data['userType'] = $this->spCalenderModel->getUserType($service_id);

        // echo "Hi";
        $this->view("vendor/spCalendarView",$data);
    }

   
}