<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Stylesheet.css">
</head>
<style>
    body{
      background-image: url('santro.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
     background-size: cover;
    }
    </style>
<body >
    <div class="header" id="myHeader">
        <a href="../pages/customer.html" class="button button1">Back</a>
        <a href="../home.php" class="button button1">Home</a>
        <h2 align="center" style="color: black;font-family: veranda;font-size: 45px">CUSTOMER DETAILS</h2>
      </div>
    <h1 id= "heading"></h1>
    <br> <br> <br> <br>
    <form name="myform" action="results.jsp" method="POST">
            <div >  <table align="center">
            <tr>
                <td> <strong>Name :</strong> </td>
                <td><input type ="text" name="first" value="" size="50"/></td>
            </tr>
            <tr>
                <td> <strong>Last Name :</strong></td>
                <td><input type ="text" name="last" value="" size="50"/></td>
            </tr>
            <tr>
                <td> <strong>Email Address :</strong></td>
                <td><input type ="text" name="email" value="" size="50"/></td>
            </tr>
            <tr>
                <td><strong>Gender: </strong></td>
                <td><input type ="radio" name="gender" value="Male" /> Male</td>
                <td><input type ="radio" name="gender" value="Female" /> Female</td>
            </tr>
        </table>

    </div> 
        <input class="button button1" style="position: absolute;right: 600px;" type ="reset" value="Clear" name="clear"/>
        <input class="button button1" style="position: absolute;right: 700px;" type ="submit" value="Submit" name="clear"/>

    </form>
    
</body>
</html>