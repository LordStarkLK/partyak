<?php
class Chat extends FrameworkPartyak{
    public function __construct(){
        $this->helper("linker");
        $this->model = $this->model("chatModel");
    }

    public function index(){
        // $data['sender'] = $sender;
    }
}


?>