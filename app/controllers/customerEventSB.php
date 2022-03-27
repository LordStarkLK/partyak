<?php


class CustomerEventSB extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("customer");
        $this->EventSB = $this->model('customerEventSBModel');
    }
    
    public function index($planning_id){
        // echo $_SESSION['type'];
        // if(!isset($_SESSION['userId']) && !isset($_SESSION['type']) || $_SESSION['type'] != "customer"){
        //     $this->redirect("login");
        // }
        // $this->preventBack("customer");


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Get data from the form submission
            $taskName = $_POST["todo_input"];
            // $planning_id=42;

            $this->EventSB->addToDoTasks($taskName,$planning_id);
        }

        $data['event']= $this->EventSB->getEventDetails($planning_id);
        $data['service']= $this->EventSB->getServicePDetails($planning_id);
        $data['todo']= $this->EventSB->getTodoTasks($planning_id);
        $this->view("customer/customerEventSBView",$data);
    }

    public function statusChange($status,$task){
        $this->EventSB->updateStatus($status,$task);
        // echo $status;
    }

}