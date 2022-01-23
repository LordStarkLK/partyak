<?php

class Router
{
    // default controller values
    public $controller = "home";
    public $method = "index";
    public $params = [];

    public function __construct()
    {

        $url = $this->url();
        // print_r($url);

        if (!empty($url)) {
            if (file_exists("../app/controllers/" . $url[0] . ".php")) {
                // echo "Hi";
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                echo "$url[0].php not found";
            }
        }

        // Including the controller file
        require_once("../app/controllers/" . $this->controller . ".php");

        // Including the controller object
        $this->controller = new $this->controller;

        if (isset($url[1]) && !empty($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                echo "Method " . $url[1] . " not found. ";
            }
        }

        // checking for more params and inserting them into params variable
        if (isset($url)) {
            $this->params = $url;
        } else {
            $this->params = [];
        }

        // calling the method of the controller class by passing parameters array
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function url()
    {
        if (isset($_GET['url'])) {

            $url = $_GET['url'];
            // print_r($url);

            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            
            // print_r($url);
            $url = explode("/", $url);




            // returning the set or url portions as an array 
            return $url;
        }
    }
}
