<?php

namespace Framework;


class App {

    public function run(){

        $uri = $_SERVER['REQUEST_URI'];
        if(!empty($uri) && $uri[-1] === "/"){
            header('location:' . substr($uri, 0,-1));
            header('HTTP/1.1 301 Moved Permanently');
            exit();
        }
        $response = new Response();
        $response->getBody()->whrite('Bonjour les loulous du PHP');
       return $response;
    }
}