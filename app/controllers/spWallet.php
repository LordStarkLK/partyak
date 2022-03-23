<?php

class SpWallet extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->user = $this->Model("spWalletModel");
    }

    public function index()
    {
        // echo "Hi";
        $user_id = $this->getSession("userId");
        $data["wallet"] = $this->user->getWalletDetails($user_id);
        $data["payment"] = $this->user->getPaymentDetails($user_id);
        $data["settlement"] = $this->user->getSettlementDetails($user_id);
        $this->view("vendor/spWalletView",$data);
    }

   
}