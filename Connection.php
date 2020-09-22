<?php

$dataPoints = array();
$dataPoints2 = array();
$dataPoints3 = array();
$dataPoints4 = array();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from tb;";
$result = $conn->query($sql);
foreach($result as $row){
    array_push($dataPoints, array("x"=> $row["x"], "y"=> $row["subs"], "label"=> $row["month"], "indexLabel"=> $row["position"]));
}

$sql2 = "SELECT * from likedis;";
$result2 = $conn->query($sql2);
foreach($result2 as $row2){
    array_push($dataPoints2, array("x"=> $row2["upload"], "y"=> $row2["ratio"]));
}

$sql3 = "SELECT * from gviewspm;";
$result3 = $conn->query($sql3);
foreach($result3 as $row3){
    array_push($dataPoints3, array("x"=> $row3["x"], "y"=> $row3["views"], "label"=> $row3["month"]));
}

$sql4 = "SELECT * from dayviews;";
$result4 = $conn->query($sql4);
foreach($result4 as $row4){
    array_push($dataPoints4, array("x"=> $row4["hour"], "y"=> $row4["views"]));
}

//echo json_encode($dataPoints);
//echo json_encode($dataPoints2);
//echo json_encode($dataPoints3);
//echo json_encode($dataPoints4);

$conn->close();
?>
