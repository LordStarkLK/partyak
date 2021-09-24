<?php

class vendorRegisterModel extends Database
{
    // public function usernameCheck($username)
    // {
    //     $username = mysqli_real_escape_string($GLOBALS["db"], $username);
    //     $query = "SELECT * FROM user WHERE username='$username' LIMIT 1";
    //     $result = mysqli_query($GLOBALS['db'], $query);

    //     return mysqli_fetch_assoc($result);
    // }

    public function emailCheck($email)
    {
        $email = mysqli_real_escape_string($GLOBALS["db"], $email);
        $query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($GLOBALS['db'], $query);

        return mysqli_fetch_assoc($result);
    }

    public function addVendor($fname, $lname, $type, $email, $password)
    {

        //Insert user data
        $query = "INSERT INTO user(email, password, user_type) VALUES ('$email', '$password', 'vendor')";
        mysqli_query($GLOBALS['db'], $query);

        //Select user id of that user
        $result = mysqli_fetch_assoc(mysqli_query($GLOBALS['db'], "SELECT user_id FROM user WHERE email='$email' LIMIT 1"));
        $userId = $result["user_id"];

        //Insert data to child tables of user - vendor rable
        $query = "INSERT INTO vendor(user_id, vendor_type, f_name, l_name) 
        VALUES ('$userId', '$type', '$fname', '$lname')";
        mysqli_query($GLOBALS['db'], $query);
    }
}
