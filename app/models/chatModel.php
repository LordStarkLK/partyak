<?php
    class chatModel extends database{
        public function send($message,$sender,$reciever,$date,$time){
            $query = "INSERT INTO user_message values
            ('$reciever','$sender','$message','$date','$time')";
            mysqli_query($GLOBALS['db'],$query);
        }

        public function getChat($sender,$reciever){
            $chat = "SELECT * FROM user_message WHERE (sender='$sender' AND reciever='$reciever') OR (sender='$reciever' AND reciever='$sender')";
            $result = mysqli_query($GLOBALS['db'],$chat);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        public function getstatus($reciever){
            $chatStatus = "SELECT * FROM user_online WHERE userName='$reciever' LIMIT 1";
            $result = mysqli_query($GLOBALS['db'], $chatStatus);
            return mysqli_fetch_assoc($result);
        }

        public function getDetails($user){
            $userDetails = "SELECT * FROM user WHERE userName='$user' LIMIT 1";
            $result = mysqli_query($GLOBALS['db'],$userDetails);
            return mysqli_fetch_assoc($result);
        }
    }






?>