<?php
include 'connection.php';
$conn = OpenCon();
session_start();
if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['name']);
    $password = mysqli_real_escape_string($conn,$_POST['pass']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT count(*) as username from register where username='".$uname."' and passwordr='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['username'];

        if($count > 0){
          //sesion tracking
           $_SESSION['login_user'] = $uname;

            header('Location: ../home.php');
            echo"sdfsd";
        }else{
            echo"
            <html>
                <head>
                    <title>Login</title>   
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"../CSS/login.css\">
                    <script type=\"text/javascript\" src=\"../JS/Java.js\"></script>
                  </head>
                <body>
                    
                    <div class=\"wrapper fadeInDown\">
                        <div id=\"formContent\">
                          <!-- Tabs Titles -->
                          <h4 class=\"clr\">Invaild Username And Password<h4>
                          <h2 class=\"active\"> Sign In </h2>
                          <h2 class=\"inactive underlineHover\"><a href=\"../signup.html\">Sign Up</a></h2>
                      
                          <!-- Icon -->
                          <div class=\"fadeIn first\">
                            <img src=\"file:///C:/Users/seran/Downloads/login%20(1).svg\" id=\"icon\" alt=\"User Icon\" height=\"50px\" width=\"50px\" />
                          </div>
                      
                          <!-- Login Form -->
                          <form name=\"myForm\" action=\"../PHP/login.php\" method=POST onsubmit=\"return validateForm()\" >
                            <input type=\"text\" id=\"username\" class=\"fadeIn second\" name=\"name\" placeholder=\"Email\">
                            <input type=\"password\" id=\"password\" class=\"fadeIn third\" name=\"pass\" placeholder=\"Password\">
                            <input type=\"submit\" name=\"submit\" class=\"fadeIn fourth\" value=\"LogIn\">
                          </form>
                      
                          <!-- Remind Passowrd -->
                          <div id=\"formFooter\">
                            <a class=\"underlineHover\" href=\"#\">Forgot Password?</a>
                          </div>
                      
                        </div>
                      </div>
                </body>
            </html>";
        }

    }

}
?>