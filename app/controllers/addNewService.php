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

        // $q1=implode(',', $_POST['q1']);

        
        if (isset($_POST['submit'])) {
        
            // $studentName = $_POST['stuName'];
            // $studentAge = $_POST['stuAge'];
    
            // $this->AddNewServiceModel->addServiceDetails($id, $studentName, $studentAge);
           
            // tab1
            $servName = $_POST['servicename'];
            $servDesc = $_POST['servicedescription'];
            $location = $_POST['location'];
            $serviceType = $_POST['serviceType'];
            // $eventType = $_POST['eventType'];
            // $checkeventType = implode(" , " , $eventType);
            
            $eventType = implode(" , " , $_POST['eventType']);
            $province = implode(" , " , $_POST['province']);
            // $province =  $_POST['province'];
            // $checkprovince = implode(" , " , $province);
            $facebook = $_POST['furl'];
            $instagram = $_POST['iurl'];
            $linkedin = $_POST['lurl'];

            //tab2
            $rePrice = $_POST['reservationprice'];
            $iniDiscount = $_POST['initialDiscount'];
            $count = $_POST['bookingCount'];
            $prepaTime = $_POST['preparationtime'];
            $simultaneousBooking = $_POST['simultaneous'];
            $cancellationPolicy = $_POST['policy'];
            $tandc = $_POST['payment_tANDc'];
            $addiInfo = $_POST['additionalInfo'];

            //tab3
            //venue feature
            $venueType = implode(',' , $_POST['venuetype']);
            $standingCapacity = $_POST['standingcapacity'];
            $seatingArr = implode(',' , $_POST['seating']);
            $addFeature = implode(',' , $_POST['addfeature']);
            if(empty($venueType)){ $venueType="NULL"; }
            if(empty($standingCapacity)){ $standingCapacity="NULL"; }
            if(empty($seatingArr)){ $seatingArr="NULL"; }
            if(empty( $addFeature)){  $addFeature="NULL"; }
            

            //catering
            $meals = implode(',' , $_POST['mealType']);
            $attendantsNo = $_POST['attendants'];
            if(empty($meals)){ $meals="NULL"; }
            if(empty($attendantsNo)){ $attendantsNo="NULL"; }

            //music feature-
            $musicType = $_POST['musictype'];
            if(empty( $musicType)){  $musicType="NULL"; }

            //dancing
            $danceType = implode(',' , $_POST['danceType']);
            if(empty( $danceType)){  $danceType="NULL"; }

            //saloon feature
            $saloonType = $_POST['saloontype'];
            $suppType = implode(',' , $_POST['supptype']);
            if(empty($saloonType)){ $saloonType="NULL"; }
            if(empty($suppType)){ $suppType="NULL"; }

            //cake and sweets
            $cakeType = implode(',' , $_POST['caketype']);
            $sweetType = implode(',' , $_POST['sweettype']);
            if(empty( $cakeType)){  $cakeType="NULL"; }
            if(empty($sweetType)){ $sweetType="NULL"; }

            //decorations
            $decoType = implode(',' , $_POST['decotype']);
            $flowType = implode(',' , $_POST['flowtype']);
            if(empty($decoType)){ $decoType="NULL"; }
            if(empty($flowType)){ $flowType="NULL"; }

            //suppliers
            $sectionType = implode(',' , $_POST['sectiontype']);
            $dressCategory = implode(',' , $_POST['dresscat']);
            if(empty($sectionType)){ $sectionType="NULL"; }
            if(empty($dressCategory)){ $dressCategory="NULL"; }


            // additional features
            $caption = $_POST['caption'];
            $video = $_POST['vurl'];
            // if(empty($caption)){ $caption="NULL"; }
            // if(empty( $video)){  $video="NULL"; }
            // $caption = $_POST['caption'];
            // $caption = $_POST['caption'];     
            
            
            // $this->AddNewServiceModel->addServiceDetails($id, $servName, $servDesc, $location, $eventType,  $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime,   $simultaneousBooking,$cancellationPolicy, $tandc, $addiInfo, 
            
            
            // $caption, $video );

            
            $this->AddNewServiceModel->addServiceDetails($id, $servName, $servDesc, $location, $serviceType, $eventType, $province, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime, $simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, 
            $venueType, $standingCapacity, $seatingArr, $addFeature, 
            $meals, $attendantsNo, 
            $musicType,
            $danceType,
            $saloonType, $suppType,
            $cakeType, $sweetType,
            $decoType, $flowType,
            $sectionType, $dressCategory ,
            $caption, $video );

        }

        // $data["errors"] = $errors;
        // echo "Hi";
        // $this->view("vendor/addNewServiceView" , $data);
        $this->view("vendor/addNewServiceView");

        
    }
}



