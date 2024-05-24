<?php
//connect to the database
require_once('constants.php');
require_once('configure.php');

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DB) or die(mysqli_connect_error($conn));

?>