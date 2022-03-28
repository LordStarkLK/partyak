<?php


class CustomerEventSB extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->preventBack("customer");
        $this->EventSB = $this->model('customerEventSBModel');
    }
    
    public function index($planning_id){


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Get data from the form submission
            $taskName = $_POST["todo_input"];

            $this->EventSB->addToDoTasks($taskName,$planning_id);
        }

        $data['event']= $this->EventSB->getEventDetails($planning_id);
        $data['service']= $this->EventSB->getServicePDetails($planning_id);
        $data['todoN']= $this->EventSB->getTodoTasks($planning_id);
        $data['todoT']= $this->EventSB->getTodo($planning_id);
        $data['inproT']= $this->EventSB->getInpro($planning_id);
        $data['comT']= $this->EventSB->getCom($planning_id);
        $this->view("customer/customerEventSBView",$data);
    }

    public function statusChange($status,$task){
        $this->EventSB->updateStatus($status,$task);

    }

    public function deleteTask($task_id,$planning_id){
        $this->EventSB->deleteTask($task_id);
        $this->index($planning_id);
    }


}