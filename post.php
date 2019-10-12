<?php

$link = mysqli_connect("namedb", "zeb", "", "*****");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$first_name = mysqli_real_escape_string($link, $_REQUEST['FirstName']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['LastName']);
 
$sql = "INSERT INTO persons (first_name, last_name) VALUES ('$FirstName', '$LastName',)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>