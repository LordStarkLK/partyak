<?php
class AdminTandCModel extends database {
    public function getTandC(){
        $query = "SELECT * FROM terms_and_conditions ORDER BY 't_c_id'";
        $result = mysqli_query($GLOBALS['db'],$query);
        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

    public function updateTandC($title,$content,$id){
        $query = "UPDATE terms_and_conditions SET title = '$title' , content = '$content' WHERE t_c_id = '$id'";
        mysqli_query($GLOBALS['db'],$query);
    }

    public function addTandC($title,$content){
        $query = "INSERT INTO terms_and_conditions(title,content) VALUES ('$title','$content')";
        mysqli_query($GLOBALS['db'],$query);
    }
}