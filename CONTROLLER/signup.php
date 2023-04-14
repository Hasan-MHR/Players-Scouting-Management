<?php

include("../model/dbconfig.php");
$clubInfo = $_POST["clubInfo"];
$clubName = $_POST["clubName"];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO club_info (club_Info, club_name, club_email, club_password) VALUES ('$clubInfo', '$clubName', '$email', '$password')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Club Registered Successfully";
    header("refresh:2;url=../view/login.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>




<?php
#else{
#    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
#    $result = mysqli_query($conn, $sql);
#    if ($result){
#        echo "Success";
#    }
#    else{
#        echo "Error";
#    }
# }

?>