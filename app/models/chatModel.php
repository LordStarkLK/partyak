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

            $list = explode("_",$searchTerm);

            foreach($list as $searchTerm)
            {
                $searchTerm = "%" . $searchTerm . "%";
            
                $query = "SELECT *  FROM user WHERE user_id <> '$id' AND (f_name LIKE '$searchTerm' OR l_name LIKE '$searchTerm' )";
    
                $query = mysqli_query($GLOBALS['db'],$query);

                if(mysqli_num_rows($query) > 0)
                {
                    break;
                }
            }

            $output = "";
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $sql2 = "SELECT * FROM message WHERE reciever_id='{$row['user_id']}' OR sender_id='{$row['user_id']}' ORDER BY message_id DESC LIMIT 1";

                    $sql2 = mysqli_query($GLOBALS['db'],$sql2);

                    if(mysqli_num_rows($sql2) == 1)
                    {
                        $row2 = mysqli_fetch_assoc($sql2);
                        $result = $row2['message'];

                        strlen($result > 28) ? $msg = substr($result,0,28) . '...' : $msg = $result;
                    }else{
                        $result="No message available";
                    }

                    if(isset($row2['reciever_id'])){
                        ($id == $row2['reciever_id']) ? $you = "You: " : $you = "";

                    }else{
                        $you = "";
                    }
                    ($id == $row['user_id']) ? $hid_me = "hide" : $hid_me = "";

                    $output .= '<div class="profi">
                    <img class="proimg"' . srcIMG("avatar3.png") .  'alt="Avatar">
                </div>

                <div class="remsg">
                    <a>'. $row['f_name']. " " . $row['l_name'] .'</a>
                    <p>'. $you . $msg . '</p>
                </div>
                    ';
                }
            }else{
                $output .= '<p>No user found related to your search term</p>';
            }
            echo $output;
        }

        public function chatList(){
            $id = $_SESSION['userId'];
            $query = "SELECT * FROM user WHERE user_id <> '$id'";
            $query = mysqli_query($GLOBALS['db'],$query);
            $output = "";
            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_assoc($query)){
                    $sql2 = "SELECT * FROM message WHERE reciever_id='{$row['user_id']}' OR sender_id='{$row['user_id']}' ORDER BY message_id DESC LIMIT 1";
                    $sql2 = mysqli_query($GLOBALS['db'],$sql2);

                    
                    
                    if(mysqli_num_rows($sql2)>0){
                        $row2 = mysqli_fetch_assoc($sql2);
                        $result = $row2['message'];
                        if(strlen($result>28)){
                            $msg = substr($result,0,28) . '...';
                        }else{
                            $msg = $result;
                        }

                        if(isset($row2['reciever_id'])){
                            if($id == $row2['reciever_id']){
                                $you = "You: ";
                            }else{
                                $you = "";
                            }
                        }else{
                            $you = "";
                        }
                        // ($id == $row2['reciever_id'])
    
                        $output .= '<div class="profi">
                        <img class="proimg" src=". ."  alt="Avatar">

                       
        
                    </div>
    
                    <div class="remsg">
                        <a>'. $row['f_name']. " " . $row['l_name'] .'</a>
                        <p>'. $you . $msg . '</p>
                    </div>
                        ';
                    }
                }
                }
                echo $output;
                    }

                    
                   


                }
            









?>