<?php

class CustomerThroughEpPlanSModel extends Database
{

    public function addEventEpServicePreference( $Seating ,$indoorAgree , $outdoorAgree, $danceAgree,$setiAgree,$poruwaAgree,$venueAgree,$breakfAgree,$lunchAgree ,$dinnerAgree ,$teaAgree, $buffeAgree ,$noServant,$cateringAgree, $budget ,$photoDetails,$photoAgree, $mbandAgree, $djAgree ,$soloAgree,$musicAgree,$kandyAgree, $lawAgree, $sabaAgree,$wesAgree,$dancesAgree,$SalonType,$hairAgree ,$dressers,$makeupAgree ,$salonAgree,$wedAgree, $partyAgree , $sweetAgree ,$cakeAgree,$sbackAgree, $floralAgree,$decoAgree,$soundAgree ,$lightAgree ,$indooreAgree,$outdooreAgree,$soundsAgree,$maleAgree,$femaleAgree,$dressAgree)
    {




        //Insert data to child tables of user service_preferences table
        $query = "INSERT INTO service_preferences(seating_arrangement,indoor_venue,outdoor_venue,dancing_floor,seti_back,poruwa,venue_handle_EP,breakfast,lunch	,dinner	,buffet	,tea_time,no_of_servents,catering_handle_EP,estimated_budget_range,	photo_shoot_details,photo_handle_EP,music_band,dj,solo_singer,music_handle_EP,kandyan	,sabaragamuwa,low_country,western,dance_handle_EP,saloon_type,hair_style,no_of_dressers,make_up,salon_handle_EP,wedding_cake,party_cake	,sweet ,cake_handle_EP,setibackP,floral,deco_handle_EP,sound_service,	lighting_service,indoor_event,outdoor_event,sound_handle_EP,male_dress,	female_dress,dressers_handle_EP)
        VALUES ('$Seating','$indoorAgree' ,'$outdoorAgree' , '$danceAgree','$setiAgree' ,'$poruwaAgree','$venueAgree','$breakfAgree','$lunchAgree' ,'$dinnerAgree' ,'$teaAgree', '$buffeAgree' ,'$noServant','$cateringAgree', '$budget' ,'$photoDetails','$photoAgree', '$mbandAgree', '$djAgree' ,'$soloAgree','$musicAgree','$kandyAgree', '$lawAgree', '$sabaAgree','$wesAgree' ,'$dancesAgree','$SalonType','$hairAgree ','$dressers','$makeupAgree','$salonAgree','$wedAgree', '$partyAgree' , '$sweetAgree' ,'$cakeAgree','$sbackAgree', '$floralAgree' ,'$decoAgree','$soundAgree' ,'$lightAgree' ,'$indooreAgree','$outdooreAgree','$soundsAgree','$maleAgree','$femaleAgree','$dressAgree' )";
        mysqli_query($GLOBALS['db'], $query);
    }

}