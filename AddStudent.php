<?php




$link = mysqli_connect("
sdb-58.hosting.stackcp.net", "student68-353031376a7a", "ua92-studentAc", "student68-353031376a7a");




if ($link === false) {
 die("Connection failed: ");

}




if (isset($_POST['submit'])) {

$Sname = $_POST['Sname'];

 $lname = $_POST['lname'];






$sql = "INSERT INTO s2 ( sname, lname) VALUES ('$Sname', '$lname')";

 if (mysqli_query($link, $sql)) {

echo "New record created successfully";

 } else {

echo "Error adding record ";

 }

}




?>