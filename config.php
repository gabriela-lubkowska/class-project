<?php
$server = "localhost";
$dbUsername = "id16989389_root";
$dbPassword = "KimLip727Jinsoul!";
$database = "id16989389_guestbook";

$conn = mysqli_connect($server, $dbUsername, $dbPassword, $database);
if (!$conn){
    die("<script>alert('Connection Failed')</script>");
}
?>