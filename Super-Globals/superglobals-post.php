<?php

// Super Globals 
// Variables that can be accessed in global scope

// Examples: Server, Request, Post, Get, Sessions, Cookies
// $_ => sign of super global variable

    if(isset($_POST['submit'])) {

        // On submit, get username and email data and echo on screen

        $username = $_POST['username'];
        $email = $_POST['email'];

        echo "my username is $username and my email is $email";
    }
?>

<html>
    <head></head>
    <body>
        <form action="superglobals-post.php" method="POST">
            <input type="text" name="username" placeholder="username"> <br>
            <input type="text" name="email" placeholder="email"> <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>