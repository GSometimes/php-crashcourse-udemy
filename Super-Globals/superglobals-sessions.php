<?php

// Sessions

// session_start();

// $_SESSION['username'] = "gore456";

// $_SESSION['age'] = "33";

// echo "my new name is: " . $_SESSION['username'] . "my age is: " . $_SESSION['age'];

// echo "<br>";

// echo "it is now set";

// $_SESSION['username'] = "gore123";

// $_SESSION['age'] = 32;

// $_SESSION['fcolor'] = "purple";

// Destoying Session 

session_start(); // start session

session_unset(); // unsets variables

session_destroy(); // destroys variables

echo "session now is destroyed";

// <html>
    // <head></head>
    // <body>
        // <h3><?php echo $_SESSION['username'] . ", age is " . $_SESSION['age'] . ", favorite color is " . $_SESSION['fcolor']; ?></h3>
    <!-- </body> -->
<!-- </html> -->


