<?php

    // Super Globals
    // Get
    
    if(isset($_GET['lang']) AND isset($_GET['coursep'])) {
        $get = $_GET['lang'];
        $company = $_GET['coursep'];

        echo "my favorite lang is $get and the company name is $company";
    }

?>


<html>
    <head></head>
    <body>
        <a href="superglobals-get.php?lang=php&coursep=webcoding">Get Link</a>
    </body>
</html>