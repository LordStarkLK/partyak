<?php

class LoginModel extends Database
{
    public function passwordCheck($email, $password)
    {

        // Removing all the special characters in variables
        $email = mysqli_real_escape_string($GLOBALS['db'], $email);
        $password = mysqli_real_escape_string($GLOBALS['db'], $password);

        // SQL part
        $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($GLOBALS['db'], $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row['user_type'] != 'admin') {
            if (!empty($row) && password_verify($password, $row['password'])) {
                return $row;
            }
        } else {
            if (!empty($row) && $row['password'] == $password) {
                return $row;
            }
        }
    }
}
