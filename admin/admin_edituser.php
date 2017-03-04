<?php
    require_once("phpscripts/init.php");

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $id = $_SESSION['users_id'];
    $popForm = getUser($id);

    if (isset($_POST['submit'])) {
      $fname = trim($_POST['fname']);
      $lname = trim($_POST['lname']);
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);

         $result = editUser($id, $fname, $lname, $username, $password);
         $message = $result;
      }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Account</title>
    <?php if(!empty($message)){echo $message;}?>
  </head>
  <body>
    <h1>Edit Account</h1>
    <form action="admin_edituser.php" method="post">
      <label>First Name:</label>
      <input type="text" name="fname" value="<?php echo $popForm['user_fname']; ?>">
      <label>Last Name:</label>
      <input type="text" name="lname" value="<?php echo $popForm['user_lname']; ?>">
      <label>Username:</label>
      <input type="text" name="username" value="<?php echo $popForm['user_name']; ?>">
      <label>Password:</label>
      <input type="text" name="password" value="<?php echo $popForm['user_pass']; ?>">

      <br><br>
      <input type="submit" name="submit" value="Edit Account">

    </form>

  </body>
</html>
