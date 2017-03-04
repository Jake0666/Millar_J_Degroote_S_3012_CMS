<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $ip = $_SERVER["REMOTE_ADDR"];
  //echo $ip;

  require_once("phpscripts/init.php");

  if(isset($_POST['submit'])){
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);

      if($username != "" && $password != ""){
          $result = logIn($username, $password, $ip);
          $message = $result;

        //echo "gg";

      }else{
        $message = "ah ah ah, you didnt say the magic word";

      }
  }

 ?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
</head>

<?php
  if(!empty($message)) {echo $message;}

 ?>

<body>
  <h1>CMS Login</h1>
    <form action="admin_login.php" method="post">
      <label>Username</label>
      <input type="text" name="username" value=""></input>
      <label>Password:</label>
      <input type="password" name="password" value=""></input>
      <input type="submit" name="submit" value="go!"></input>
    </form>

    <a href="../index.php">HOME<a/>

</body>
</html>
