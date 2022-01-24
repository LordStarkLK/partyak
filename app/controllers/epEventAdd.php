<?php

class epEventAdd extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        //include this to call CRUD functions from the controller files
        $this->epAddEvent = $this->model("eventPlannerAddEventModel");
    }

    public function index()
    {
        // echo "Hi";
        $this->view("eventPlanner/epEventAddView");
    }
    public function addEvent()
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
                //Insert data
                if (!empty($_FILES["img1"]["name"])){

                //Process the new image that is uploaded by the user
                $target_dir = "../public/img/event-planner/event-imgs/";
                $target_file = $target_dir . basename($_FILES["img1"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $filename = $_FILES["img1"]["name"];

                move_uploaded_file($_FILES["img1"]["tmp_name"], $target_file);

                $timestamp = time();
                $image = $userId . $timestamp . "." . $imageFileType; //generating an unique name to the image file
                rename("../public/img/event-planner/event-imgs/$filename", "../public/img/event-planner/event-imgs/$image"); //adding the generated name to the file
                
                $this->epAddEvent->addEvent($userId,$eventType,$date,$noOfGuests,$image,$location,$description);
                $this->view("eventPlanner/epEventAddView");
                }else{
                    $errors["img1"] = "Image is required";
                    $data["errors"] = $errors;
                    $this->view("eventPlanner/epEventAddView", $data);
                }
            }
        }
        $data["errors"] = $errors;
        $this->view("eventPlanner/epEventAddView", $data);
    }
}
