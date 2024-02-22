<?php

class App 
{
    public function __construct() 
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    // mengambil url lalu memecah sesuai keinginan kita 
    public function parseURL() 
    {
        if( isset($_GET['url']) )
        {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}