<?php
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $state_registration = $_POST['state_registration'];
    $vehicle_name = $_POST['vehicle_name'];
    $vehicle_number = $_POST['vehicle_number'];
    $vehicle_color = $_POST['vehicle_color'];
    $passcode = $_POST['passcode'];

    $array_data = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'gender' => $gender,
        'state_registration' => $state_registration,
        'vehicle_name' => $vehicle_name,
        'vehicle_number' => $vehicle_number,
        'vehicle_color' => $vehicle_color,
        'passcode' => $passcode
    ];

    echo $first_name . $last_name . $email . $gender . $state_registration . $vehicle_name . $vehicle_number . $vehicle_color ;

    file_put_contents('file_content/'. $array_data['first_name'] . ".json", json_encode($array_data));





}


?>