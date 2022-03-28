<?php

class SpAnalytics extends FrameworkPartyak
{
    public function __construct()
    {
        $this->helper("linker");
        $this->preventBack("vendor");
        $this->AnalyticModel = $this->Model("spAnalyticModel");
    }

    public function index()
    {
        // echo "Hi";
        $user_id = $this->getSession("userId");
        $data["payment"] = $this->AnalyticModel->getPaymentDetails($user_id);
        $data["settlement"] = $this->AnalyticModel->getSettlementDetails($user_id);
        $data["income"] = $this->AnalyticModel->getMonthlyIncome($user_id);

        $this->view("vendor/spAnalyticsView",$data);
    }
}
