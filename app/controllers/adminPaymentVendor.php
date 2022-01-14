<?php

class AdminPaymentVendor extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("admin");
        $this->paymentModel = $this->model("adminPaymentVendorModel");
    }

    public function index(){
        $data["request"] = $this->paymentModel->getRequest();
        $this->view("admin/adminPaymentRequestsView",$data);
    }

    public function payments(){
        $data["payments"] = $this->paymentModel->getPayments();
        $data["wallet"] = $this->paymentModel->getWalletDetails();
        $this->view("admin/adminPaymentVendorView",$data);
    }

    public function insertSettlement(){
        if (isset($_POST['submit'])) {
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            // $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
    
            $fileExt = explode('.' , $fileName);
            //getting the file type 
            $fileActualExt = strtolower(end($fileExt)); 
    
            $allowed = array('jpg' , 'jpeg' , 'png' );
    
            //check the file type
            if(in_array($fileActualExt, $allowed)){
                //ckeck errors
                if($fileError === 0){
                    //check the file size
                    // if ($fileSize < 1000000){
                        //set a unique name
                        $fileNameNew = uniqid('', true).".".$fileName ;
                        //upload to the folder
                        $fileDestination = '../public/img/vendorPayments/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);

                        $request_id = " ";
                        
                        $user_id = $_POST['user_id'];
                        $amount = $_POST['amount'];
                        $description = $_POST['description'];
                        $date = $_POST['dateupload'];
                        $type = $_POST['type'];
                        if(isset($_POST['request_id'])){
                            $request_id = $_POST['request_id'];
                        }
                        // echo $type;

                        // echo $request_id;


                        // echo $date;
                        // echo $user_id;
                        // echo $amount;
                        // echo $fileNameNew;
                        // echo $description;



                        
                        // $sql = "INSERT into upload(name) VALUES('$fileNameNew') ";

                        $this->paymentModel->insertSettlement($fileNameNew,$user_id,$amount,$description,$date,$type,$request_id);
                        $data["payments"] = $this->paymentModel->getPayments();
                        $data["wallet"] = $this->paymentModel->getWalletDetails();
                        $this->view("admin/adminPaymentVendorView",$data);

                }
            }
        }
    }
}