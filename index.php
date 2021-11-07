<?php

   // a $GLOBALS['variable'] = something
session_start();

   include("connection.php");
   include("functions.php");

   $user_data = check_login($con);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>My website</title>
   </head>
   <body>
     <a href="logout.php">Logout</a>
     <he>This is the index page</h1>

   </body>
 </html>
