<?php

class CustomerOnYourOwnPlanSModel extends Database
{

    public function addEventServicePreference( $Seating ,$indoorAgree , $outdoorAgree, $danceAgree,$setiAgree,$poruwaAgree,$breakfAgree,$lunchAgree ,$dinnerAgree ,$teaAgree, $buffeAgree ,$noServant, $budget ,$photoDetails, $mbandAgree, $djAgree ,$soloAgree,$kandyAgree, $lawAgree, $sabaAgree,$wesAgree,$SalonType,$hairAgree ,$dressers,$makeupAgree ,$wedAgree, $partyAgree , $sweetAgree ,$sbackAgree, $floralAgree,$soundAgree ,$lightAgree ,$indooreAgree,$outdooreAgree,$maleAgree,$femaleAgree,$id)
    {

        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT planning_id FROM event WHERE  user_id='$id'  ORDER BY user_id DESC LIMIT 1"));
        $planning_id = $result["planning_id"];

        //Insert data to child tables of user service_preferences table
        $query = "INSERT INTO service_preferences(seating_arrangement,indoor_venue,outdoor_venue,dancing_floor,seti_back,poruwa,breakfast,lunch	,dinner	,buffet	,tea_time,no_of_servents,estimated_budget_range,	photo_shoot_details,music_band,dj,solo_singer,kandyan	,sabaragamuwa,low_country,western,saloon_type,hair_style,no_of_dressers,make_up,wedding_cake,party_cake	,sweet ,setibackP,floral,sound_service,	lighting_service,indoor_event,outdoor_event,male_dress,	female_dress,planning_id,event_planner_flag)
        VALUES ('$Seating','$indoorAgree' ,'$outdoorAgree' , '$danceAgree','$setiAgree' ,'$poruwaAgree','$breakfAgree','$lunchAgree' ,'$dinnerAgree' ,'$teaAgree', '$buffeAgree' ,'$noServant', '$budget' ,'$photoDetails', '$mbandAgree', '$djAgree' ,'$soloAgree','$kandyAgree', '$lawAgree', '$sabaAgree','$wesAgree' ,'$SalonType','$hairAgree ','$dressers','$makeupAgree','$wedAgree', '$partyAgree' , '$sweetAgree' ,'$sbackAgree', '$floralAgree' ,'$soundAgree' ,'$lightAgree' ,'$indooreAgree','$outdooreAgree','$maleAgree','$femaleAgree' ,'$planning_id','no')";
        mysqli_query($GLOBALS['db'], $query);
    }

}