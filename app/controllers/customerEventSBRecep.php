<?php


class CustomerEventSBRecep extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->EventSB = $this->model('customerEventSBRecepModel');

        $this->preventBack("customer");
    }
    
    public function index($planning_id){

        $data['recomandDetail'] = $this->EventSB->getRecommendDetails($planning_id);
        $this->view("customer/customerEventSBRecepView",$data);
    }

}