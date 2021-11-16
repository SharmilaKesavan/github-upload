<?php

function OpenCon()
{
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="root";
    $db="wtproject";
    $port=3307;

    $conn =mysqli_connect($dbhost,$dbuser,$dbpass,$db,$port) or die("Connect failed: %s\n".$conn -> error);

    return $conn;

   
}

function CloseCon($conn)
{
    $conn -> close();
}

?>