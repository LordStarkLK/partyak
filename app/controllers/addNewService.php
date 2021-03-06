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
        
            
            // tab1
            $servName = $_POST['servicename'];
            $servDesc = $_POST['servicedescription'];
            $location = $_POST['location'];
            $serviceType = $_POST['serviceType'];
            $eventType = implode("," , $_POST['eventType']);
            $province = implode("," , $_POST['province']);
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

            // additional features
            $caption = $_POST['caption'];
            $video = $_POST['vurl'];

            //event planner
            $epFixedPrice = $_POST['epFixedPrice'];
                

            // $file = $_FILES['file'];
            $imgName = $_FILES['file']['name'];
            $imgTmpName = $_FILES['file']['tmp_name'];
            $imgError = $_FILES['file']['error'];
    
            // $imgExt = explode('.' , $imgName);
            // //getting the img type 
            // $imgActualExt = strtolower(end($imgExt)); 
    
            // $allowed = array('jpg' , 'jpeg' , 'png' );
    
            //check the img type
            // if(in_array($imgActualExt, $allowed)){
                //ckeck errors
                
    
            // }
            // else{
            //     echo "You cannot upload files of this type";
            // }



            
            if($serviceType == "venues_halls"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $addFeature = implode(',' , $_POST['addfeature']);
                $seatingArr = implode(',' ,  $_POST['seating']);
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';

            }

            elseif($serviceType == "catering"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = implode(',' , $_POST['mealType']);
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';
                
            }

            elseif($serviceType == "musical"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';
                
            }

            elseif($serviceType == "dancing"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = implode(',' , $_POST['danceType']);
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';
                
            }

            elseif($serviceType == "saloon"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $saloonType = isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $suppType = implode(',' , $_POST['supptype']);
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';
                
            }

            elseif($serviceType == "cakes"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = implode(',' , $_POST['caketype']);
                $sweetType = implode(',' , $_POST['sweettype']);
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';
                
            }

            elseif($serviceType == "decoration"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = implode(',' , $_POST['decotype']);
                $flowType = implode(',' , $_POST['flowtype']);
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';
                
            }

            elseif($serviceType == "dresses"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = implode(',' , $_POST['sectiontype']);
                $dressCategory = implode(',' , $_POST['dresscat']);
                
            }
            

            else{
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $seatingArr = isset($_POST["seating"]) ? $_POST["seating"] : 'Null';
                $addFeature = isset($_POST["addfeature"]) ? $_POST["addfeature"] : 'Null';
                $meals = isset($_POST["mealType"]) ? $_POST["mealType"] : 'Null';
                $attendantsNo = isset($_POST["attendants"]) ? $_POST["attendants"] : 'Null';
                $musicType = isset($_POST["musictype"]) ? $_POST["musictype"] : 'Null';
                $danceType = isset($_POST["danceType"]) ? $_POST["danceType"] : 'Null';
                $suppType = isset($_POST["supptype"]) ? $_POST["supptype"] : 'Null';
                $saloonType= isset($_POST["saloontype"]) ? $_POST["saloontype"] : 'Null';
                $cakeType = isset($_POST["caketype"]) ? $_POST["caketype"] : 'Null';
                $sweetType = isset($_POST["sweettype"]) ? $_POST["sweettype"] : 'Null';
                $decoType = isset($_POST["decotype"]) ? $_POST["decotype"] : 'Null';
                $flowType = isset($_POST["flowtype"]) ? $_POST["flowtype"] : 'Null';
                $sectionType = isset($_POST["sectiontype"]) ? $_POST["sectiontype"] : 'Null';
                $dressCategory = isset($_POST["dresscat"]) ? $_POST["dresscat"] : 'Null';
                
            }

            
            if($imgError === 0){
                //set a unique name
                $imgNameNew = uniqid('', true).".".$imgName ;
                //upload to the folder
                $imgDestination = '../public/img/serviceImg/'.$imgNameNew;
                move_uploaded_file($imgTmpName, $imgDestination);
                // $this->MarketingModel->uploadMarketingContent($id, $imgNameNew);
    


                $result=$this->AddNewServiceModel->addServiceDetails($id, $servName, $servDesc, $location, $serviceType, $eventType, $province, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime, $simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, $imgNameNew,
            $venueType, $standingCapacity, $seatingArr, $addFeature, $imgNameNew,
            $meals, $attendantsNo, 
            $musicType,
            $danceType,
            $saloonType, $suppType,
            $cakeType, $sweetType,
            $decoType, $flowType,
            $sectionType, $dressCategory ,
            $caption, $video,$epFixedPrice );

       
            
            if($result){
                $this->successful($servName,$serviceType);
                // $this->redirect("addNewService/successful");
                // $this->view("vendor/spSuccessServiceView");
            }
            else{
                $this->redirect("addNewService/unsuccessful");
                // $this->view("vendor/spDeleteServiceView");
            } 
        }
        // else{
        //     echo "Error in uploading the file!";
        // }
            
            // $result=$this->AddNewServiceModel->addServiceDetails($id, $servName, $servDesc, $location, $serviceType, $eventType, $province, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime, $simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, $imgNameNew,
            // $venueType, $standingCapacity, $seatingArr, $addFeature, 
            // $meals, $attendantsNo, 
            // $musicType,
            // $danceType,
            // $saloonType, $suppType,
            // $cakeType, $sweetType,
            // $decoType, $flowType,
            // $sectionType, $dressCategory ,
            // $caption, $video );

       
            
            // if($result){
            //     $this->redirect("addNewService/successful");
            //     // $this->view("vendor/spSuccessServiceView");
            // }
            // else{
            //     $this->redirect("addNewService/unsuccessful");
            //     // $this->view("vendor/spDeleteServiceView");
            // }     
            

        }



        // $data["errors"] = $errors;
        // echo "Hi";
        // $this->view("vendor/addNewServiceView" , $data);
        $this->view("vendor/addNewServiceView");
        
    }

    public function successful($servName,$serviceType){
        $userId = $this->getSession("userId");
        
        $this->AddNewServiceModel->makeNotification($userId,$servName,$serviceType);
        $this->view("vendor/spSuccessServiceView");
    }

    public function unsuccessful(){
        $this->view("vendor/spConErrorView");
    }
}



