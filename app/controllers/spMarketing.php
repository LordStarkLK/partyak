<?php

class SpMarketing extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");

        //include this to call CRUD functions from the controller files
        $this->MarketingModel = $this->model("SpMarketingModel");
    }

    public function index()
    {
        $id=$_SESSION['userId'];

        if (isset($_POST['submit'])) {
            $file = $_FILES['file'];
                // print_r($file);
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
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
                    if ($fileSize < 1000000){
                        //set a unique name
                        $fileNameNew = uniqid('', true).".".$fileName ;
                        //upload to the folder
                        $fileDestination = '../public/img/marketingContent/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        // header("Location: spMarketingView.php?uploadsuccess");
                        
                        // $sql = "INSERT INTO upload(name) VALUES('$fileNameNew') ";
                        // $sql = "INSERT into upload(name) VALUES('$fileNameNew') ";

                        $this->MarketingModel->uploadMarketingContent($id, $fileNameNew);
            
                        // if(mysqli_query($conn,$sql)){
                        //     echo "File uploaded successfully!";
                        // }
                        // else{
                        //     echo "Uploading fail!";
                        // }
                        
                    }
                    else{
                        echo "Your file is too big!";
                    }
                }
                else{
                    echo "Error in uploading the file!";
                }
    
            }
            else{
                echo "You cannot upload files of this type";
            }
    
        }




        
        $data['contents'] = $this->MarketingModel->getUploadedContentDetails($id);

        // echo "Hi";
        $this->view("vendor/spMarketingView", $data);
    }

   
}
