<?php
include '../php/connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>