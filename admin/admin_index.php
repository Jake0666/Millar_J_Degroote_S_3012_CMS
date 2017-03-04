<?php
ini_set('display_errors',1);
  error_reporting(E_ALL);
    require_once('phpscripts/init.php');

    confirm_logged_in();

 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
</head>

<body>
    <h1><?php

    //sets the time zone for this set of code
    date_default_timezone_set('US/Eastern');

    //sets the time to be read in the 24 hour clock without the 2 zeros before
    $time = date('G');

    if ( $time >= 3 && $time <= 11 ) { //if the time is more than 3 but less than 11 then display message
        echo "Good Morning";
    } else if ( $time >= 12 && $time <= 16 ) { //else if etc...
        echo "Good Afternoon";
    } else if ( $time >= 17 || $time <= 2 ) {
        echo "Good Evening";
    }

    ?> </br>Welcome <?php echo $_SESSION['users_fname']; ?> to the admin panel. </br>The last time you logged in was:  <?php echo $_SESSION['users_date']; ?></h1>
    <a href="admin_createuser.php">Create New User<a/>
    <a href="admin_edituser.php">Edit Account<a/>
      <a href="admin_addMovie.php">Add Movie<a/>
    <a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</body>
</html>
