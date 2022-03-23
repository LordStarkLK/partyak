<?php

class SpBooking extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        $this->BookingModel = $this->Model("spBookingModel");
    }

    public function index($service_id)
    {
        $data['service_id'] = $service_id;
        
        $data['request_data'] = $this->BookingModel->getRequestDetails($service_id);
        $data['customer_name'] = $this->BookingModel->getCustomerName($service_id);
        $data['package_data'] = $this->BookingModel->getPackageData();
        
        //for the paid bookings table
        $data['booking_data'] = $this->BookingModel->acceptedBookings($service_id);
        $data['booked_cus'] = $this->BookingModel->bookingPaymentDetails($service_id);
        $data['booked_pack'] = $this->BookingModel->bookedPackageDetails($service_id);

        $this->view("vendor/spBookingView", $data);
    }

    
    public function accept($booking_id,$service_id)
    {
        // $data['service_id'] = $service_id;
        $this->BookingModel->acceptRequest($booking_id);
        // $service_id = $this->BookingModel->getServiceId($booking_id);
        // $service_id = mysqli_fetch_assoc($service_id);

        $this->index($service_id);
        
    }

    public function reject($booking_id,$service_id)
    {
        $this->BookingModel->rejectRequest($booking_id);
        $this->index($service_id);
    }

   
}