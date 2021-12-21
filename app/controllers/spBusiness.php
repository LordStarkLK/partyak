<?php

class SpBusiness extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        //include the crud operation
        $this->BusinessModel = $this->model("spBusinessModel");
    }

    public function index()
    {
        $id = $_SESSION['userId'];

        $data['business'] = $this->BusinessModel->getVendorServices($id);
        // echo "Hi";
        $this->view("vendor/spBusinessView" ,$data);
    }

   
}