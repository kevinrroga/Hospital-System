<?php
// db_connection.php

$con = mysqli_connect("localhost", "root", "", "hms");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>