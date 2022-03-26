<?php

class SpPackage extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        //include this to call CRUD functions from the controller files
        $this->PackageModel = $this->model("SpPackageModel");

    }

    public function index($service_id)
    {
        //initilaize these varibles for server 

        $id=$_SESSION['userId'];
        $data['service_id'] = $service_id;

        $errors = array();
        $errors["serviceName"] = "";
        $errors["packageName"] = "";
        $errors["packageDescription"] = "";
        $errors["packageValidFrom"] = "";
        $errors["packageValidTo"] = "";
        $errors["packageFixedprice"] = "";
        $errors["packageUnitprice"] = "";
        // $errors["noofguest"] = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Get data from the form submission
            $serviceName = $_POST["serviceName"];
            $packageName = $_POST["packageName"];
            $packageDescription = $_POST["packageDescription"];
            $packageValidFrom = $_POST["packageValidFrom"];
            $packageValidTo = $_POST["packageValidTo"];
            $packageFixedprice = $_POST["packageFixedprice"];
            $packageUnitprice = $_POST["packageUnitprice"];


            //Empty check
            if (empty($serviceName)) $errors["serviceName"] = "Service Name is required";
            if (empty($packageName)) $errors["packageName"] = "Package Name is required";
            if (empty($packageDescription)) $errors["packageDescription"] = "Package Description is required";
            if (empty($packageValidFrom)) $errors["packageValidFrom"] = "Package Validation Date is required";
            if (empty($packageValidTo)) $errors["packageValidTo"] = "Package Validation Date is required";




            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                    echo "Hi";
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                
                $this->PackageModel->addPackageDetail($serviceName, $packageName, $packageDescription, $packageValidFrom, $packageValidTo, $service_id, $packageUnitprice, $packageFixedprice);
            }
        }
            
            
            $data["errors"] = $errors;
            $data['packages'] = $this->PackageModel->getPackageDetails($service_id);
            $data['serName'] = $this->PackageModel->getReleventServiceName($service_id);
            // echo "Hi";
            $this->view("vendor/spPackageView" , $data);

    }

    public function updatePackage($package_id){

        
        

        $errors = array();
        $errors["serviceName"] = "";
        $errors["packageName"] = "";
        $errors["packageDescription"] = "";
        $errors["packageValidFrom"] = "";
        $errors["packageValidTo"] = "";
        $errors["packageFixedprice"] = "";
        $errors["packageUnitprice"] = "";
        // $errors["noofguest"] = "";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Get data from the form submission
            $serviceName = $_POST["serviceName"];
            $packageName = $_POST["packageName"];
            $packageDescription = $_POST["packageDescription"];
            $packageValidFrom = $_POST["packageValidFrom"];
            $packageValidTo = $_POST["packageValidTo"];
            $packageFixedprice = $_POST["packageFixedprice"];
            $packageUnitprice = $_POST["packageUnitprice"];


            //Empty check
            if (empty($serviceName)) $errors["serviceName"] = "Service Name is required";
            if (empty($packageName)) $errors["packageName"] = "Package Name is required";
            if (empty($packageDescription)) $errors["packageDescription"] = "Package Description is required";
            if (empty($packageValidFrom)) $errors["packageValidFrom"] = "Package Validation Date is required";
            if (empty($packageValidTo)) $errors["packageValidTo"] = "Package Validation Date is required";




            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                    // echo "Hi";
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                
                $this->PackageModel->updatePackageDetails($serviceName,$packageName, $packageDescription, $packageValidFrom, $packageValidTo, $package_id, $packageUnitprice, $packageFixedprice);
            }
        }
            
            
            $data["errors"] = $errors;
            
            // echo "Hi";
            $this->redirect('spPackage');

    }

    public function deletePackage($package_id,$service_id){
        $this->PackageModel->deletePackage($package_id);
        $this->index($service_id);
    }

    

}

