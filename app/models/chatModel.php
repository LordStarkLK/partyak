<?php
    class chatModel extends database{
        // public function send($message,$sender,$reciever,$date,$time){
        //     $query = "INSERT INTO user_message values
        //     ('$reciever','$sender','$message','$date','$time')";
        //     mysqli_query($GLOBALS['db'],$query);
        // }

        // public function getChat($sender,$reciever){
        //     $chat = "SELECT * FROM user_message WHERE (sender='$sender' AND reciever='$reciever') OR (sender='$reciever' AND reciever='$sender')";
        //     $result = mysqli_query($GLOBALS['db'],$chat);
        //     return mysqli_fetch_all($result,MYSQLI_ASSOC);
        // }

        // public function getstatus($reciever){
        //     $chatStatus = "SELECT * FROM user_online WHERE userName='$reciever' LIMIT 1";
        //     $result = mysqli_query($GLOBALS['db'], $chatStatus);
        //     return mysqli_fetch_assoc($result);
        // }

        // public function getDetails($user){
        //     $userDetails = "SELECT * FROM user WHERE userName='$user' LIMIT 1";
        //     $result = mysqli_query($GLOBALS['db'],$userDetails);
        //     return mysqli_fetch_assoc($result);
        // }

        public function getName($id){
            $query = "SELECT f_name,l_name FROM user WHERE user_id='$id' LIMIT 1";
            $result = mysqli_query($GLOBALS['db'],$query);
            $user = mysqli_fetch_assoc($result);
            return $user;
        }

        public function searchChatList($id,$searchTerm){
            $searchTerm = mysqli_real_escape_string($GLOBALS['db'], $searchTerm);
            $query = "SELECT *  FROM users WHERE NOT user_id = '$id' AND (f_name LIKE '$searchTerm' OR l_name LIKE '$searchTerm' )";
            $output = "";
            $query = mysqli_query($GLOBALS['db'],$query);
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $sql2 = "SELECT * FROM message WHERE (sender_id = {$row['user_id']} OR reciever_id = {$row['user_id']} AND (reciever_id = {$id} OR sender_id = {$id}) ORDER BY msg_id DESC LIMIT 1";
                    $sql2 = mysqli_query($GLOBALS['db'],$sql2);
                    $row2 = mysqli_fetch_assoc($sql2);

                    (mysqli_num_rows($sql2)>0) ? $result = $row['message'] : $result="No message available";
                    strlen($result > 28) ? $msg = substr($result,0,28) . '...' : $msg = $result;
                    if(isset($row2['reciever_id'])){
                        ($id == $row2['reciever_id']) ? $you = "You: " : $you = "";

                    }else{
                        $you = "";
                    }
                    ($id == $row['user_id']) ? $hid_me = "hide" : $hid_me = "";

                    $output .= '<div class="profi">
                    <img class="proimg" <?php srcIMG("avatar3.png") ?> alt="Avatar">
                </div>

                <div class="remsg">
                    <a>'. $row['f_name']. " " . $row['l_name'] .'</a>
                    <p>'. $you . $msg . '</p>
                </div>
                    ';
                }
            }else{
                $output .= 'No user found related to your search term';
            }
            echo $output;
        }
    }






?>