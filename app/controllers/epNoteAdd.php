<?php

class EpNoteAdd extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");


        //include this to call CRUD functions from the controller files
        $this->epAddNote = $this->model("eventPlannerAddNote");
    }
    public function index()
    {

        //initilaize these varibles for server 

        // $id = $_SESSION['userId'];

        $errors = array();
        $errors["customer_id"] = "";
        $errors["customer_name"] = "";
        $errors["event_name"] = "";
        $errors["event_date"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $customId = $_POST["customer_id"];
            $customName = $_POST["customer_name"];
            $eventName = $_POST["event_name"];
            $eventDate = $_POST["event_date"];

            //Empty check
            if (empty($customId)) $errors["customer_id"] = "Order ID is required";
            if (empty($customName)) $errors["customer_name"] = "Customer Name is required";
            if (empty($eventName)) $errors["event_name"] = "Customer Name is required";
            if (empty($eventDate)) $errors["event_date"] = "Customer Name is required";


            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->epAddNote->addEpNote($customId,  $customName, $eventName, $eventDate);
                $this->view("eventPlanner/epNoteAddview");
            }
        }


        $data["errors"] = $errors;
        $this->view("eventPlanner/epNoteAddview", $data);
    }
}
