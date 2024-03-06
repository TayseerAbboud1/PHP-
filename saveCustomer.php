<?php
// Retrieve the raw POST data
$jsonData = file_get_contents('php://input');
// Decode the JSON data into a PHP associative array
$data = json_decode($jsonData, true);
// Check if decoding was successful
if ($data !== null) {
    $cid = addslashes(strip_tags($data['cid']));
    $name = addslashes(strip_tags($data['name']));
    $balance = addslashes(strip_tags($data['balance']));
    $key = addslashes(strip_tags($data['key']));

if ($key != "your_key" or trim($name) == "")
    die("access denied");

$con=mysqli_connect("localhost","root", "","company");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
try {
$sql = "insert into customers values ($cid, '$name', $balance)";
mysqli_query($con,$sql);
}
catch(Exception $e) {
    die ($e->getMessage());
}

echo "Record Added";
   
mysqli_close($con);
} else {
   echo "Invalid JSON data";
}

?> 			