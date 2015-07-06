<?php
$conn = new mysqli("localhost", "root", "", "multimedios2.0");

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

$conn2 = new mysqli("localhost", "root", "", "multimedios2.0");

if ($conn2->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}

?>
