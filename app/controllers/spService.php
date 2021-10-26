<?php

class SpService extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        //include this to call CRUD functions from the controller files
        $this->ServiceModel = $this->model("SpServiceModel");

    }

    public function index()
    {
        //initilaize these varibles for server 

        $id=$_SESSION['userId'];

        $errors = array();
        $errors["serviceName"] = "";
        $errors["packageName"] = "";
        $errors["packageDescription"] = "";
        $errors["packageValidFrom"] = "";
        $errors["packageValidTo"] = "";
        $errors["packageFixedprice"] = "";
        $errors["packageUnitprice"] = "";
        // $errors["noofguest"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $serviceName = $_POST["serviceName"];
            $packageName = $_POST["packageName"];
            $packageDescription = $_POST["packageDescription"];
            $packageValidFrom = $_POST["packageValidFrom"];
            // $city = $_POST["city"];
            $packageValidTo = $_POST["packageValidTo"];
            $packageFixedprice = $_POST["packageFixedprice"];
            $packageUnitprice = $_POST["packageUnitprice"];


            //Empty check
            if (empty($serviceName)) $errors["serviceName"] = "Service Name is required";
            if (empty($packageName)) $errors["packageName"] = "Package Name is required";
            if (empty($packageDescription)) $errors["packageDescription"] = "Package Description is required";
            if (empty($packageValidFrom)) $errors["packageValidFrom"] = "Package Validation Date is required";
            // if ($city == "null") $errors["city"] ="Location is required";
            if (empty($packageValidTo)) $errors["packageValidTo"] = "Package Validation Date is required";




            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->ServiceModel->addPackageDetail($serviceName, $packageName, $packageDescription, $packageValidFrom, $packageValidTo, $id, $packageUnitprice, $packageFixedprice);
            }
        }

            $data["errors"] = $errors;
            $data['packages'] = $this->ServiceModel->getPackageDetails($id);
            // echo "Hi";
            $this->view("vendor/spServiceView" , $data);

    }
}

