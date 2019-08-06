<?php

    require_once("./core/router.php");
    
    router::define("GET","index");
    router::define("GET","home");
    router::define("POST","home");
    router::define("POST","user");