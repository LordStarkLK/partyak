<?php

class epEventAdd extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        //include this to call CRUD functions from the controller files
        $this->epAddEvent = $this->model("eventPlannerAddEventModel");
    }

    public function index($service_id,$eventAddStatus)
    {
        $data['service_id']=$service_id;
        $data['eventAddStatus'] = $eventAddStatus;
        $this->view("eventPlanner/epEventAddView",$data);
    }
    public function addEvent($service_id)
    {
        $userId = $_SESSION["userId"];

        $errors = array();
        $errors["event_type"] = "";
        $errors["date"] = "";
        $errors["no_of_guests"] = "";
        $errors["img1"] = "";
        $errors["location"] = "";
        $errors["description"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $eventType = $_POST["event_type"];
            $date = $_POST["date"];
            $noOfGuests = $_POST["no_of_guests"];
            $location = $_POST["location"];
            $description = $_POST["description"];

            //Empty check
            if (empty($eventType)) $errors["event_type"] = "Event Type is required";
            if (empty($date)) $errors["date"] = "Date is required";
            if (empty($noOfGuests)) $errors["no_of_guests"] = "No of Guests is required";
            if (empty($location)) $errors["location"] = "Location is required";
            if (empty($description)) $errors["description"] = "Description is required";


            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) { 
                $targetDir = "../public/img/event-planner/event-imgs/"; 
                $allowTypes = array('jpg','png','jpeg','gif'); 
                $imgIndex = [0,0,0,0,0];
                $fileNames = array_filter($_FILES['file']['name']); 
                $i=0;
                if(!empty($fileNames)){ 
                    foreach($_FILES['file']['name'] as $key=>$val){ 
                        // File upload path 
                        $fileName = basename($_FILES['file']['name'][$key]); 
                        $targetFilePath = $targetDir . $fileName; 
                         
                        // Check whether file type is valid 
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                        if(in_array($fileType, $allowTypes)){ 
                            // Upload file to server 
                            if(move_uploaded_file($_FILES["file"]["tmp_name"][$key], $targetFilePath)){ 
                                $timestamp = time();
                                $finaleFileName = $userId . $timestamp . $key."." .$fileType;
                                $imgIndex[$key] = $finaleFileName;
                                rename("../public/img/event-planner/event-imgs/$fileName", "../public/img/event-planner/event-imgs/$finaleFileName");
                            } 
                        }
                    } 
                } 
                //,$imgIndex[0],$imgIndex[1],$imgIndex[2],$imgIndex[3],$imgIndex[4]
                $this->epAddEvent->addEvent($userId,$eventType,$date,$noOfGuests,$imgIndex[0],$imgIndex[1],$imgIndex[2],$imgIndex[3],$imgIndex[4],$location,$description);
                $data['eventAddStatus'] = 1;
                $this->index($service_id,1);
                }else{
                    $errors["img1"] = "Image is required";
                    $data["errors"] = $errors;
                    $data['eventAddStatus'] = 0;
                    $this->view("eventPlanner/epEventAddView", $data);
                }
            
        }
        $data['eventAddStatus'] = 0;
    }
}