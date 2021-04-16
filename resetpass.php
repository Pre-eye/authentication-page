<!DOCTYPE html>
<html>
<head>
    <title>Reset Passcode</title>
</head>
<body>
<?php
session_start();
if(isset($_POST['passcode'])){
   
    $first_name = $_POST['first_name'];

}

?>
<form method="post" action="submit_new.php">
    <p>Enter Your First Name:</p>
    <input type="text" name="first_name">
    <p>Enter New Vehicle Passcode:</p>
    <input type="password" name='password'>
    <p>Confirm Vehicle Passcode:</p>
    <input type="password" name="password_">
    <input type="submit" name="submit_passcode">
  
    </form>



</body>
</html>

