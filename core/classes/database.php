<?php

class Database
{
    public $host = "sql238.main-hosting.eu";
    public $user = "u117929562_dhp2";
    public $database = "u117929562_Partyak";
    public $password = "Partyak#2021";

    // public $host = "localhost";
    // public $user = "root";
    // public $database = "u117929562_partyak";
    // public $password = "";

    public function __construct()
    {
        $GLOBALS['db'] = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if ($GLOBALS['db'] === false) {
            die("Error : Could not connect, " . mysqli_connect_errno());
        }
    }
}