<?php
  function editUser($id, $fname, $lname, $username, $password) {
      include("connect.php");

      $updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_name='{$username}', user_pass='{$password}' WHERE user_id={$id}";
      $updatequery = mysqli_query($link, $updatestring);

      if($updatequery) {
        redirect_to("admin_index.php");
      }else{
        $message = "u dun' goofed";
        return $message;
      }

      mysqli_close($link);
    }

    function getUser($id) {
      require_once("connect.php");
      //create query
      $editInfo = "SELECT * FROM tbl_user WHERE user_id = {$id}";

      $editSadness = mysqli_query($link, $editInfo);
      //run query
      if($editSadness) {
        $found_user = mysqli_fetch_array($editSadness, MYSQLI_ASSOC);
        //gather objec, fetch array
        //return
        return $found_user;

      }else {
        //else
        //error message
        //return
        $message = "K.Y.S.";
        return $message;
      }

      mysqli_close($link);
    }

    function createUser($fname, $lname, $username, $password, $level) {
      require_once("connect.php");

      $ip = 0;
      $userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$lname}', '{$username}', '{$password}', '{$level}', '{$ip}', '1000-01-01 00:00:00' , '0', '1000-01-01 00:00:00')";
        //echo $userstring;
        $userquery = mysqli_query($link, $userstring);
        if($userquery) {
          redirect_to("admin_index.php");
        }else{
            $message = "oops, 404 error";
            return $message;
        }


      mysqli_close($link);
    }
?>
