<?php
class CustomerContactServiceProviderModel extends database
{
    // public function getServiceDetails(){
    //     $query = "SELECT service_name,service_image,service_location FROM other_service";
    //     $result = mysqli_query($GLOBALS['db'],$query);
    //     if(mysqli_num_rows($result) >= 0){
    //         return $result;
    //     }
    // }


    public function getEpDetails($city){
        if($city == "null"){
            $query = "SELECT * FROM other_service WHERE service_type='eventPlanner'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='eventPlanner' AND service_location LIKE '%{$city}%'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
        
    }


    public function getVenueDetails($city,$Seating,$indoorAgree,$outdoorAgree,$danceAgree,$setiAgree,$poruwaAgree){
        if($city == "null" && $Seating == "null" && $indoorAgree == "null" && $outdoorAgree == "null" && $setiAgree == "null" && $danceAgree == "null" && $poruwaAgree == "null" ){
            $query = "SELECT * FROM other_service WHERE service_type='venues_halls'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE (service_type='venues_halls') AND ( (service_location LIKE '%{$city}%') OR (seating_arrangement LIKE '%{$Seating}%')  OR  (venue_type = ('$indoorAgree') OR ('$outdoorAgree'))  OR  (venue_features LIKE '%{$danceAgree}%')  OR  (venue_features LIKE '%{$setiAgree}%')  OR  (venue_features LIKE '%{$poruwaAgree}%') )";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }
        
    }


    public function getCateDetails($city){
        if($city == "null"){
            $query = "SELECT * FROM other_service WHERE service_type='catering'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='catering' AND service_location LIKE '%{$city}%'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
        
    }


    public function getPhotoDetails($city){
        if($city == "null"){
            $query = "SELECT * FROM other_service WHERE service_type='photography'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='photography' AND service_location LIKE '%{$city}%'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
        
    }

    public function getMusicDetails($city,$mbandAgree,$djAgree,$soloAgree){
        if($city == "null" && $mbandAgree == "null" && $djAgree == "null" && $soloAgree == "null"){
            $query = "SELECT * FROM other_service WHERE service_type='musical'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='musical' AND ( (service_location LIKE '%{$city}%') OR (music_provider_type LIKE '%{$mbandAgree}%') OR (music_provider_type LIKE '%{$djAgree}%') OR (music_provider_type LIKE '%{$soloAgree}%') )";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }

    }


    public function getDanceDetails($city, $kandyAgree,$lawAgree,$sabaAgree,$wesAgree){
        if($city == "null" && $kandyAgree == "null" && $lawAgree == "null" && $sabaAgree == "null" && $wesAgree == "null"){
            $query = "SELECT * FROM other_service WHERE service_type='dancing'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='dancing' AND ( (service_location LIKE '%{$city}%') OR (dancing_type_name LIKE '%{$kandyAgree}%') OR (dancing_type_name LIKE '%{$lawAgree}%') OR (dancing_type_name LIKE '%{$sabaAgree}%')  OR (dancing_type_name LIKE '%{$wesAgree}%') )";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
        
    }


    public function getSalonDetails($city,$gender){
        if($city == "null" && $gender == "null"){
            $query = "SELECT * FROM other_service WHERE service_type='saloon'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='saloon' AND ( (service_location LIKE '%{$city}%') OR (saloon_type LIKE '%{$gender}%')  )";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
 
    }


    public function getCakeDetails($city,$wedAgree,$partyAgree,$sweetAgree){
        if($city == "null" && $wedAgree == "null" && $partyAgree == "null" && $sweetAgree == "null"){
            $query = "SELECT * FROM other_service WHERE service_type='cakes'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='cakes' AND ( (service_location LIKE '%{$city}%') OR (cake_type LIKE '%{$wedAgree}%')   OR (cake_type LIKE '%{$partyAgree}%')  OR (sweet_type LIKE '%{$sweetAgree}%') )";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
 
    }


    public function getDecoDetails($city,$sbackAgree,$floralAgree){
        if($city == "null" && $sbackAgree == "null" && $floralAgree == "null" ){
            $query = "SELECT * FROM other_service WHERE service_type='decoration'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='decoration' AND ( (service_location LIKE '%{$city}%') OR (decoration_type LIKE '%{$sbackAgree}%')   OR (floral_arrangement LIKE '%{$floralAgree}%')  )";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
    
    }

    public function getSoundDetails(){
        $query = "SELECT 8 FROM other_service WHERE service_type='sounds_lightings'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }


    public function getDressDetails($city,$maleAgree,$femaleAgree){
        if($city == "null" && $maleAgree == "null" && $femaleAgree == "null" ){
            $query = "SELECT * FROM other_service WHERE service_type='dresses'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }

        }else{
            $query = "SELECT * FROM other_service WHERE service_type='dresses' AND ( (service_location LIKE '%{$city}%') OR (dress_type LIKE '%{$maleAgree}%')   OR (dress_type LIKE '%{$femaleAgree}%')  )";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }
    
    }


    public function getSearchVDetails($searchV){
        if($searchV == "NULL"){
            $query = "SELECT * FROM other_service";
                $result = mysqli_query($GLOBALS['db'],$query);
                if(mysqli_num_rows($result) >= 0){
                    return $result;
                }

        }else{
            $query = "SELECT * FROM other_service WHERE Service_name LIKE '%{$searchV}%' OR service_location LIKE '%{$searchV}%'";
            $result = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($result) >= 0){
                return $result;
            }
        }

    }

}