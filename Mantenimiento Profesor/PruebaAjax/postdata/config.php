<?php
$mysqli = new mysqli("localhost", "root", "pidie", "biodata");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>