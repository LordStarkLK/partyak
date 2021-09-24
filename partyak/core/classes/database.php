<?php

class Database
{
    public $host = HOST;
    public $user = USER;
    public $database = DATABASE;
    public $password = PASSWORD;

    public function __construct()
    {
        $GLOBALS['db'] = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if ($GLOBALS['db'] === false) {
            die("Error : Could not connect, " . mysqli_connect_errno());
        }
    }
}
