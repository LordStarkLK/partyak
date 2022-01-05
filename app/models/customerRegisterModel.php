<?php

class   CustomerRegisterModel extends Database{

    // public function usernameCheck($username){
    //     $username = mysqli_real_escape_string($GLOBALS["db"],$username);
    //     $query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
    //     $result = mysqli_query($GLOBALS['db'],$query);

    //     return mysqli_fetch_assoc($result);
    // }

    public function emailCheck($email){
        $email = mysqli_real_escape_string($GLOBALS["db"],$email);
        $query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($GLOBALS['db'],$query);

        return mysqli_fetch_assoc($result);
    }

    public function addCustomer($fname,$lname,$email,$password){

        // Insert user data
        $query = "INSERT INTO user(email,password,user_type,f_name,l_name) VALUES ('$email','$password','customer','$fname','$lname')";
        $result = mysqli_query($GLOBALS['db'],$query);
        if($result){
            $query2 = "SELECT * FROM user ORDER BY user_id DESC LIMIT 1";
            $result2 = mysqli_query($GLOBALS['db'],$query2);
            return mysqli_fetch_assoc($result2);
        }

        // Select the user id of that user
        // $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE email='$email' LIMIT 1"));
        // $userId = $result["user_id"];

        // // Inserting data into the customer table
        // $query = "INSERT INTO customer(user_id,f_name,l_name)
        // VALUES('$userId','$fname','$lname')";
        // mysqli_query($GLOBALS['db'],$query);



    }
}