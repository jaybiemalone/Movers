<?php
$driver = filter_input(INPUT_POST, 'driver');
$client = filter_input(INPUT_POST, 'client');
$email = filter_input(INPUT_POST, 'email');
$trip_from = filter_input(INPUT_POST, 'trip_from');
$trip_to = filter_input(INPUT_POST, 'trip_to');
$hours = filter_input(INPUT_POST, 'hours');
$amount = filter_input(INPUT_POST, 'amount');
$tip = filter_input(INPUT_POST, 'tip');
$trip_status = filter_input(INPUT_POST, 'trip_status');
if (!empty($driver)){
    if(!empty($client)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "movers";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error(' mysqli_connect_error().')'
    .mysqli_connect_error());
}
else{
    $sql = "INSERT INTO trip_history (driver, client, email, trip_from, trip_to, trip_hours, amount, tip, trip_status)
    values ('$driver','$client','$email','$trip_from','$trip_to','$trip_hours','$amount','$tip','$trip_status')";
    if($conn->query($sql)){
        echo "New Record is inserted successfully"
    }
    else{
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
}
    }
    else "client Name should not be emty";
    die();
}
else{
    echo"driver should not be emty";
    die();
}
?>