<?php
class EventPlannerNewNoteAddModel extends database
{
    public function insertNote($recmndSerName,$serviceName,$AdvPayAmnt,$fulPaymnt,$pymntSts,$OthrSugst,$booking_id,$planningId)
    {
        $query = "INSERT INTO `event_planner_new_note`
        (`service_type`, `recom_service_name`,`adv_pay_amount`, `full_pay_amount`, `payment_status`, `other_suggest`, `booking_id`, `planning_id`)
        VALUES
        ('$recmndSerName','$serviceName','$AdvPayAmnt','$fulPaymnt','$pymntSts','$OthrSugst','$booking_id','$planningId')";

        mysqli_query($GLOBALS['db'], $query);
    }
}
