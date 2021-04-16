<?php
session_start();
if(isset($_POST['submit'])){
   
    $vehicle_number = $_POST['vehicle_number'];
    $first_name = $_POST['first_name'];
    $passcode = $_POST['passcode'];
    
/*
    $array_data = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'gender' => $gender,
        'state_registration' => $state_registration,
        'vehicle_name' => $vehicle_name,
        'vehicle_number' => $vehicle_number,
        'vehicle_color' => $vehicle_color
    ];*/

    //echo $first_name . $last_name . $gender . $state_registration . $vehicle_name . $vehicle_number . $vehicle_color ;


    $myfile = file_get_contents('file_content/'.$first_name.".json", "r") or die("Unable to open file!");
    //echo fgetc($myfile);
    $arr = json_decode($myfile, true);

    if(!is_array($arr)){
        die("ERROR: Input is not an array");
    }

    $wl = false;

    foreach($arr as $key=>$value){
        $chek = $key.$value;
    if($chek == 'passcode'.$passcode){
     $wl = true;
      $_SESSION["auth_pass"] = "true";
      
    }
}
 if($wl){
    session_destroy();
 }

    if (isset($_SESSION['auth_pass'])) {

    foreach($arr as $key=>$value){
        if($chek == 'first_name'.$first_name){
            echo 'Welcome '.$first_name;
          
        }
        echo $key . " => " . $value . "<br>";      
    }
}else {

    echo 'sorry car not found';
} 


    


}


?>

<a href="logout.php">logout</a>