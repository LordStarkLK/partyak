<?php

class AdminDashboard extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->dashBoardModel = $this->model("adminDashboardModel");

    }
    
    public function index(){
        // Getting analytics details
        $data['user_total'] = $this->dashBoardModel->getUserTotal();
        $data['customer_total'] = $this->dashBoardModel->getCustomerTotal();
        $data['vendor_total'] = $this->dashBoardModel->getVendorTotal();
        $data['monthly_sales'] = $this->dashBoardModel->getMonthlySales();
        $data['booking_total'] = $this->dashBoardModel->getBookingTotal();
        $data['event_total'] = $this->dashBoardModel->getEventTotal();
        $data['service_total'] = $this->dashBoardModel->getServiceTotal();
        
        $this->view("admin/adminHomeView",$data);
    }

}