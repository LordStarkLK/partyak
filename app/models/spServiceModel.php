<?php

class SpServiceModel extends Database
{
    
    public function getServiceInfo($id)
    {
        // $query ="SELECT status, service_name, service_type, service_location FROM other_service WHERE user_id='$id' ";
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT service_id FROM other_service WHERE user_id='$id' AND service_name='Mount Lavinia Hotel' LIMIT 1"));
        $serviceId = $result["service_id"];

        $query = "SELECT service_id, service_name, description, service_location, service_type, event_type, service_areas, fb_url, instagram_url, linkedin_url, advance_price, initial_discount, initial_count, preparation_time, simultaneous_booking, cancellation_policy, payment_terms_and_conditions, additional_information, 
         venue_type, standing_capacity, seating_arrangement, venue_features,
         meal_time, no_of_attendants, 
         music_provider_type,
         dancing_type_name,
         saloon_type, supplying_services,
         cake_type, sweet_type,
         decoration_type, floral_arrangement,
         dress_sections, dress_type,
         caption, video_urL FROM other_service WHERE service_id='$serviceId' ";
        


        $result = mysqli_query($GLOBALS['db'], $query) ;
        if(mysqli_num_rows($result) >= 0){
            return $result;
        }
    }
    

}