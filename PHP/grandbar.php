<?php
session_start();
$prod="100 Grand are a unique combination of chewy caramel, rich milk chocolate and crunchy crisped rice — We’re passionate about the classic American chocolate of 100 Grand bars, adding a touch of enjoyment into every day with flavor so good we can’t contain it!";
$_SESSION['name'] = "Grand Bar ";
$_SESSION['img1'] = "100Grand";
$_SESSION['cost1'] = 10;
$_SESSION['desc'] =$prod;
header('Location:commonchoc.php');
?>