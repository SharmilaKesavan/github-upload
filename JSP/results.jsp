<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMER INFORMATION</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Stylesheet.css">
</head>
<%
  String firstName= request.getParameter("first");
String lastName= request.getParameter("last");
String emailAddress= request.getParameter("email");
String gender= request.getParameter("gender");
%>
<body>
    <div class="header" id="myHeader">
        <a href="../JSP/index.jsp" class="button button1">Back</a>
        <a href="../home.php" class="button button1">Home</a>
        <h2 align="center" style="color: black;font-family: veranda;font-size: 45px">CUSTOMER INFORMATION</h2>
      </div> <br> <br> <br> <br> <br> <br>
    <table border="2" align="center">
        <tr>
            <td>FIRST NAME </td>
            <td><%=firstName%></td>
        </tr>
        <tr>
            <td>LAST NAME </td>
            <td><%=lastName%></td>
        </tr>
        <tr>
            <td>EMAIL </td>
            <td><%= emailAddress%></td>
        </tr>
        <tr>
            <td>GENDER </td>
            <td><%= gender%></td>
        </tr>
    </table>
    
</body>
</html>