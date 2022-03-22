<?php


class CustomerBecomeVendor extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("customer");


        $this->AddFirstServiceModel = $this->model("CustomerBecomeVendorModel");
    }
    
    public function index(){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");


        $id=$_SESSION['userId'];

        // $q1=implode(',', $_POST['q1']);

        if($this->checkVendor()){
           
            $userId = $this->getSession("userId");
            $this->AddFirstServiceModel->changeUserRole($userId);
            $this->setSession("type","vendor");
            $this->redirect("vendorHome");
        }
        

        
        if (isset($_POST['submit'])) {
        
            
            // tab1
            $bankName = $_POST['bankname'];
            $accNum = $_POST['bankaccount'];
            $accHolder = $_POST['bankaccounth'];
            $branchName = $_POST['brname'];
            $servName = $_POST['servicename'];
            $servDesc = $_POST['servicedescription'];
            $location = $_POST['location'];
            $serviceType = $_POST['serviceType'];
            $eventType = implode(" , " , $_POST['eventType']);
            $province = implode(" , " , $_POST['province']);
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
                

            // $file = $_FILES['file'];
            // $imgName = $_FILES['file']['name'];
            // $imgTmpName = $_FILES['file']['tmp_name'];
            // $imgError = $_FILES['file']['error'];
    
            // $imgExt = explode('.' , $imgName);
            // //getting the img type 
            // $imgActualExt = strtolower(end($imgExt)); 
    
            // $allowed = array('jpg' , 'jpeg' , 'png' );
    
            // //check the img type
            // if(in_array($imgActualExt, $allowed)){
            //     //ckeck errors
            //     if($imgError === 0){
            //             //set a unique name
            //             $imgNameNew = uniqid('', true).".".$imgName ;
            //             //upload to the folder
            //             $imgDestination = '../public/img/serviceImg/'.$imgNameNew;
            //             move_uploaded_file($imgTmpName, $imgDestination);
            //             // $this->MarketingModel->uploadMarketingContent($id, $imgNameNew);
            
            //     }
            //     else{
            //         echo "Error in uploading the file!";
            //     }
    
            // }
            // else{
            //     echo "You cannot upload files of this type";
            // }



            
            if($serviceType == "venues_halls"){
                $venueType = isset($_POST["venuetype"]) ? $_POST["venuetype"] : 'Null';
                $standingCapacity = isset($_POST["standingcapacity"]) ? $_POST["standingcapacity"] : 'Null';
                $addFeature = implode(' , ' , $_POST['addfeature']);
                $seatingArr = implode(' , ' ,  $_POST['seating']);
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

            $this->AddFirstServiceModel->addBankDetails($bankName , $accNum , $accHolder,$branchName );

            
            $this->AddFirstServiceModel->addServiceDetails($id, $servName, $servDesc, $location, $serviceType, $eventType, $province, $facebook, $instagram, $linkedin, $rePrice, $iniDiscount, $count, $prepaTime, $simultaneousBooking, $cancellationPolicy, $tandc, $addiInfo, 
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
        $this->view("customer/customerBecomeVendorView");
    }

    public function checkVendor(){
        echo "hi";
        $id=$_SESSION['userId']; 
        $data['vendorch']=$this->AddFirstServiceModel->checkVendorDet($id);
        // echo $data['vendorch'];
        // $this->view("components/customerNavigation",$data);
        return $data['vendorch'];


    }

}