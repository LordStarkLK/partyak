<?php
class AdminHowItWorksModel extends database {
    public function getIntro(){
        $query = "SELECT * FROM how_it_works WHERE heading_type = 'Intro'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    
}