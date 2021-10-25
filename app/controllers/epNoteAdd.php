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
        $errors["order_id"] = "";
        $errors["cutom_name"] = "";
        $errors["note"] = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Get data from the form submission
            $orderId = $_POST["order_id"];
            $customName = $_POST["cutom_name"];
            $note = $_POST["note"];


            //Empty check
            if (empty($orderId)) $errors["order_id"] = "Order ID is required";
            if (empty($customName)) $errors["cutom_name"] = "Customer Name is required";
            if (empty($note)) $errors["note"] = "Note is required";




            /* Count number of validation failures */
            $numberOfErrors = 0;
            foreach ($errors as $key => $value) {

                if ($value != "") {
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0) {
                //Insert data
                $this->epAddNote->addEpNote($orderId, $customName, $note);
            }
        }


        $data["errors"] = $errors;
        $this->view("eventPlanner/epNoteAddview", $data);
    }
}
