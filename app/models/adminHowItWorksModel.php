<?php
class AdminHowItWorksModel extends database {
    public function getIntro(){
        $query = "SELECT * FROM how_it_works WHERE heading_type = 'Intro'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getMainHeadingUnique(){
        $query = "SELECT * FROM how_it_works WHERE heading_type = 'main heading unique'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getUniqueFeatures(){
        $query = "SELECT * FROM how_it_works WHERE heading_type = 'unique features'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getSteps(){
        $query = "SELECT * FROM how_it_works WHERE heading_type = 'steps'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getVendorDetails(){
        $query = "SELECT * FROM how_it_works WHERE heading_type = 'vendor details'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function getCustomerDetails(){
        $query = "SELECT * FROM how_it_works WHERE heading_type = 'customer details'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }



    







    
}