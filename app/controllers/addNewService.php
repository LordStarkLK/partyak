<?php

class AddNewService extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        //include this to call CRUD functions from the controller files
        $this->AddNewServiceModel = $this->model("AddNewServiceModel");
    }

    public function index()
    {
        $id=$_SESSION['userId'];

        // $errors = array();
        // $errors["servicename"] = "";
        // $errors["servicedescription"] = "";
        // $errors["serviceType"] = "";
        

        // $q1=implode(',', $_POST['q1']);

        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // if (isset($_POST['submit'])) {
            // echo "Hi 2";
            //Get data from the form submission
            //form side 1
            // $servicename = $_POST['servicename'];
            // $servicedescription = $_POST['servicedescription'];
            // $serviceType = $_POST['serviceType'];
            // $eventType = implode(',' , $_POST['eventType']);
            // $province = implode(',' , $_POST['province']);
            // $furl = $_POST["furl"];
            // $iurl = $_POST["iurl"];
            // $lurl = $_POST["lurl"];

            //form side 2
            // $reservationprice = $_POST['reservationprice'];
            // $initialDiscount = $_POST['initialDiscount'];
            // $initialCount = $_POST["initialCount"];
            // $preparationtime = $_POST['preparationtime'];
            // $simultaneous = $_POST['simultaneous'];
            // $policy = $_POST['policy'];
            // $payment_tANDc = $_POST['payment_tANDc'];
            // $additionalInfo = $_POST['additionalInfo'];

            //these are for feature tables
            //first music feature
            // $musictype = $_POST['musictype'];

            //venues and halls feature
            // $venuetype = $_POST["venuetype"];
            // $standingcapacity = $_POST["standingcapacity"];
            // $seating = implode(',' , $_POST['seating']);
            // $addfeature = implode(',' , $_POST['addfeature']);

            //catering feature
            // $mealType = implode(',' , $_POST['mealType']);
            // $attendants = $_POST["attendants"];

            //dancing feature
            // $danceType = implode(',' , $_POST['danceType']);

            //saloon feature
            // $attendants = $_POST["saloontype"];
            // $supptype = implode(',' , $_POST['supptype']);

            //cake and sweet feature
            // $caketype = implode(',' , $_POST['caketype']);
            // $sweettype = implode(',' , $_POST['sweettype']);

            //decoration feature
            // $decotype = implode(',' , $_POST['decotype']);
            // $flowtype = implode(',' , $_POST['flowtype']);

            //dress supplying feature
            // $sectiontype = implode(',' , $_POST['sectiontype']);
            // $dresscat = implode(',' , $_POST['dresscat']);




            //for upload files
            // $caption = $_POST["caption"];
            // $serviceimage = $_POST["serviceimage"];
            // $servicedoc = $_POST["servicedoc"];
            
            


            //Empty check
            // if (empty($servicename)) $errors["servicename"] = "Service Name is required";
            // if (empty($servicedescription)) $errors["servicedescription"] = "Description is required";
            // if ($serviceType == "null") $errors["serviceType"] = "Service type is required";




            /* Count number of validation failures */
            // $numberOfErrors = 0;
            // foreach ($errors as $key => $value) {

            //     if ($value != "") {
            //         $numberOfErrors++;
            //     }
            // }

            // if ($numberOfErrors == 0) {
                //Insert data
                
                // $this->AddNewServiceModel->addServiceDetails($id, $servicename, $servicedescription, $payment_tANDc , $additionalInfo, $policy, $reservationprice, $preparationtime, $initialDiscount, $simultaneous, $caption, $musictype);
        //     }
        //     else{
        //         echo "Oppz error!";
        //     }







        //  }
        if (isset($_POST['submit'])) {
        
            // $studentName = $_POST['stuName'];
            // $studentAge = $_POST['stuAge'];
    
            // $this->AddNewServiceModel->addServiceDetails($id, $studentName, $studentAge);
           
            // tab1
            $servName = $_POST['servicename'];
            $servDesc = $_POST['servicedescription'];
            $facebook = $_POST['furl'];
            $instagram = $_POST['iurl'];
            $linkedin = $_POST['lurl'];

            //tab2
            $rePrice = $_POST['reservationprice'];
            $prepaTime = $_POST['preparationtime'];
            $tandc = $_POST['payment_tANDc'];
            $addiInfo = $_POST['additionalInfo'];

            //tab3
            $caption = $_POST['caption'];
            $video = $_POST['vurl'];

            // $caption = $_POST['caption'];
            // $caption = $_POST['caption'];
            // $caption = $_POST['caption'];
            // $caption = $_POST['caption'];
            // $caption = $_POST['caption'];
            // $caption = $_POST['caption'];
            // $caption = $_POST['caption'];
                        
            $this->AddNewServiceModel->addServiceDetails($id, $servName, $servDesc,  $facebook, $instagram, $linkedin, $rePrice, $prepaTime, $tandc, $addiInfo, $caption, $video );
            
            
    
        }

        // $data["errors"] = $errors;
        // echo "Hi";
        // $this->view("vendor/addNewServiceView" , $data);
        $this->view("vendor/addNewServiceView");

        
    }
}



