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

    public function addCustomer($fname,$lname,$address,$email,$password){

        // Insert user data
        $query = "INSERT INTO user(email,password,user_type) VALUES ('$email','$password','customer')";
        mysqli_query($GLOBALS['db'],$query);

        // Select the user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE email='$email' LIMIT 1"));
        $userId = $result["user_id"];

        // Inserting data into the customer table
        $query = "INSERT INTO customer(user_id,f_name,l_name,address)
        VALUES('$userId','$fname','$lname','$address')";
        mysqli_query($GLOBALS['db'],$query);



    }
}