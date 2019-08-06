<?php

    class router
    {
        private $uri;
        static private $routes = ["GET"=>[],"POST"=>[]];

        public static function define($method,$uri){
            $trimed_uri = trim($uri, "/");
            array_push(self::$routes[$method],$trimed_uri);
        }

        private static function paths($uri,$method){
           if(in_array($uri,self::$routes[$method])){
                 require_once("./controllers/".$uri."Controller.php");
                 $class = $uri."Controller";
                 $controller = new $class($method);
                
           }else{
               echo "Não Salve";
           }
        }
        public static function request($uri, $method){
            $request = trim($uri, "/");
            self::paths($request,$method);
        }

    }