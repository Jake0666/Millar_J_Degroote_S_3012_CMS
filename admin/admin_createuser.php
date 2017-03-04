<?php
    require_once("phpscripts/init.php");

    if (isset($_POST['submit'])) {
      $fname = trim($_POST['fname']);
      $lname = trim($_POST['lname']);
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
      $level = $_POST['lvllist'];

      if (empty($level)) {
        $message = "Please select a user level.";
      }else{
         //echo "all good";
         $result = createUser($fname, $lname, $username, $password, $level);
         $message = $result;
      }
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Creat New User</title>
    <?php if(!empty($message)){echo $message;}?>
  </head>
  <body>
    <h1>Creat User</h1>
    <form action="admin_createuser.php" method="post">
      <label>First Name:</label>
      <input type="text" name="fname" value="">
      <label>Last Name:</label>
      <input type="text" name="lname" value="">
      <label>Username:</label>
      <input type="text" name="username" value="<?php if(!empty($username)){echo $username;}?>">
      <label>Password:</label>
      <input type="text" name="password" value="<?php if(!empty($password)){echo $password;}?>">
      <select name="lvllist">
        <option value="">Please select a user level...</option>
        <option value="2">Web Admin</option>
        <option value="1">Web Master</option>

      </select>
      <br><br>
      <input type="submit" name="submit" value="Create User">

    </form>

  </body>
</html>
