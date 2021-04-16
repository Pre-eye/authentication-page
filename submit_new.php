<!DOCTYPE html>
<html>
<head>
    <title>Passcode Reset</title>
</head>
<body>
<?php
if(isset($_POST['submit_passcode'])){
    $first_name = $_POST['first_name'];
    $password = $_POST['password'];
    $passcode = $_POST['password_'];

/*    $myfile = fopen('file_content/'. 'first_name' . ".json", "w") or die("Unable to open file!");
$passcode = "password_";
fwrite($myfile, $passcode);
fclose($myfile);
*/

$myfile = file_get_contents('file_content/'.$first_name. ".json", "r") or die("Unable to open file!");
$arr = json_decode($myfile, true);

$arr[2]['password_'] = $passcode;

echo 'Passcode was reset successfully!';
}
else{
    echo 'Please try again';
}
?>

<br>
<p>
<a href="logout.php">Logout</a>
</p>

</body>
</html>