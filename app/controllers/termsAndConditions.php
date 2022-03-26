<?php

class TermsAndConditions extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->user= $this->model('adminTandCModel');
        $this->preventBack2("customer","vendor");
    }

    public function index(){
        $data['tandc'] = $this->user->getTandC();

        $this->view("tandcView",$data);

    }
}

