<?php
namespace App\System;
class Application{
    private const ADMIN_ALIAS = ADMIN_ALIAS_NAME;
    private $isAdminRequested = false;
        private $uri = '/';
        private $url;
        public function __construct()
    {
   $this->ProcessURL();
   var_dump($this);
    }
    private function ProcessURL(){

        $_GET['url']= isset($_GET['url']) ? filter_var(trim($_GET['url'],"/"),FILTER_SANITIZE_URL) :"";
       $url =  explode("/",$_GET['url']);

       // TODO : check isset Admin and Language Requested in url
        $sUrl = $_GET['url'];
        // TODO : Process for Admin and Language Requested in url
        $this->uri = !empty($url) ? $url : $this->uri;
        $this->url = trim(URL,"/") . $_SERVER['REQUEST_URI'];
    }
}