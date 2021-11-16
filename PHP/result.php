<?php
session_start();
$name = $_SESSION['name'];
$image = $_SESSION['img1'];
$cost1=$_SESSION['cost1'];
$textcost=$_POST['cost'];
$login =$_SESSION['login'];
$defaultcost= 0 ;
$tot= $defaultcost + $cost1;
$result=$tot * $textcost;
echo "<html>
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/Stylesheet.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/choc.css\">
</head>
<body>
<center>
<p align=\"right\">$login 
<a href = \"../PHP/logout.php\">Sign Out</a><p>
<div class=\"polaroid\">
<h1>Payment</h1>
  <img src=\"../images/$image.jpg\" alt=\"50Grand\" style=\"width:50%\">
  <div class=\"container\">
  <p>$name</p>
  </div>
  <table>
  <form method=\"post\" action=\"thanku.php\">
  <tr><td>Paying Amount</td><td>Rs. $result</td></tr>
  <tr>
        <td>Bank Selection:</td>
       <td> <select name=\"selectbank\" required>
            <option selected hidden value=\"\">Select Bank</option>
            <option value=\"Indian_Bank\">Indian Bank</option>
            <option value=\"Sate_Bank_of_India\">SBI</option>
            <option value=\"Paytm\">PatymPaymentsBank</option>
            <option value=\"Axis_Bank\">Axis Bank</option>
            <option value=\"HDFC_Bank\">HDFC Bak</option>
            <option value=\"Airtel_Payments_Bank\">AirtelPaymentsBank</option>
            <option value=\"ICIC_Bank\">ICIC Bank</option>
            <option value=\"Andhra_Bank\">Andhra Bank</option>
            <option value=\"Bank_of_India\">Bank of India</option>
            <option value=\"Central_Bank_of_India\">Central Bank of India</option>
            <option value=\"Indian_Overseas_Bank\">Indian Overseas Bank</option>
        </select>
    </td> <td><input type=\"password\" placeholder=\"Passsword\"></td>
    </tr><tr><td>Delivery Address</td>
    <td><textarea name=\"addr\"  rows=\"5\" cols=\"30\"></textarea> </td></tr>
    <tr><td></td><td>
    <input type=\"submit\" Value=\"Pay\">
    </td></tr>
    </form>
    </table>
</center>
</body>
</html>";
?>