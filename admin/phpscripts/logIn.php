<?php
function logIn($username, $password, $ip) {
  require_once("connect.php");
  $username = mysqli_real_escape_string($link,$username);
  $password = mysqli_real_escape_string($link,$password);
  $loginString = "SELECT * FROM tbl_user WHERE user_name = '{$username}' AND user_pass = '{$password}'";
  //echo $loginString;
  $user_set = mysqli_query($link, $loginString);
  $userAttempts_and_lockout = "SELECT user_attempts, user_lockout FROM tbl_user WHERE user_name = '{$username}'";
  //echo mysqli_num_rows($user_set);
$user_attempts_query = mysqli_query($link, $userAttempts_and_lockout);
date_default_timezone_set('US/Eastern'); //defines date for $date
$date = new dateTime();
$properDate = $date -> format('Y-m-d H:i:s'); //tells system how to display the date


  if(mysqli_num_rows($user_set)) {
      $found_user = mysqli_fetch_array($user_set,MYSQLI_ASSOC);
      //echo $found_user['user_fname'];
      $id = $found_user['user_id'];

      $attempts = $found_user['user_attempts']; //a bunch of varriables accessing different things that i might use.
      $lockout = $found_user['user_lockout'];

      $_SESSION['users_id'] = $id;
      $_SESSION['users_name'] = $found_user['user_name'];
      $_SESSION['users_fname'] = $found_user['user_fname'];
      $_SESSION['users_date'] = $found_user['user_login_date'];
      $_SESSION['users_attempts'] = $attempts;
      $_SESSION['users_lockout'] = $lockout;

      if($attempts>2){ //if the amount of attempts is more than 2
        if((strtotime($properDate) - strtotime($lockout))<1800){ //then initiate lockout for 30 seconds
            $message = "You have been locked out for too many failed login attempts. Please Wait ".(30 - floor((strtotime($properDate) - strtotime($lockout))/60))." minutes.";
            return $message;

        }

      }

      if(mysqli_query($link, $loginString)) { //gets the ip of the user
          $updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_id={$id}";
          $updateQuery = mysqli_query($link, $updateString);
        }

        if(mysqli_query($link, $loginString)){ //updates the database with the last time the user logged in
          $currentDate = "UPDATE tbl_user SET user_login_date = '{$properDate}' WHERE user_name = '{$username}'";
          $updateQuery = mysqli_query($link, $currentDate);
        }

        if(mysqli_query($link, $loginString)){ //resets the loggin attempts to 0
          $updateAttempts = "UPDATE tbl_user SET user_attempts = '0' WHERE user_name = '{$username}'";
          $updateQuery = mysqli_query($link, $updateAttempts);
        }

      redirect_to("admin_index.php");


  }else{ //if failed loggin, find attempts, and then initiate lockout
    $found_user = mysqli_fetch_array($user_attempts_query, MYSQLI_ASSOC);
    $attempts = $found_user['user_attempts'];
    $lockout = $found_user['user_lockout'];

    if($attempts>2){ //message to tell user how long to wait for lockout to end
      $message = "You have been locked out for too many failed login attempts. Please Wait ".(30 - floor((strtotime($properDate) - strtotime($lockout))/60))." minutes.";
      return $message;
    }else if($attempts>1){ //adds an attempt to the counter
      $updateLockout = "UPDATE tbl_user SET user_lockout = '$properDate' WHERE user_name = '{$username}'";
      $updateQuery = mysqli_query($link, $updateLockout);

      $updateAttempts = "UPDATE tbl_user SET user_attempts = user_attempts + 1 WHERE user_name = '{$username}'";
      $updateQuery = mysqli_query($link, $updateAttempts);

      $message = "You are currently locked out. Please wait 35 minutes before trying again.";
      return $message;
    }else{ //adds an attempt to the counter, then displays how many attempts are left

      $updateAttempts = "UPDATE tbl_user SET user_attempts = user_attempts + 1 WHERE user_name = '{$username}'";
      $updateQuery = mysqli_query($link, $updateAttempts);

      $message = "Wrong username or password. you have ".(2- $attempts)." attempts left.";
      return $message;
    }

      $message = "Username/Password are incorrect. You now have X chances to get it right";
      return $message;
  }

  mysqli_close($link);
}


 ?>
