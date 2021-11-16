window.onscroll = function()
 {
 	myFunction()
 };

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

document.getElementById("homeimg").src;


document.getElementById("p1").innerHTML="Our award-winning chocolate tastes even better once you’ve visited our factory on Commercial Street in Springfield, MO. We love to welcome visitors from near and far to learn all about how and why we make chocolate and of course nibble on some samples along the way. Our tours offer a behind-the-scenes look into the details of what it takes to craft exceptional chocolate, enjoyed by fans across the globe. Our doors are open to you for public tours every Tuesday at 3:30 p.m.";
document.getElementById("p2").innerHTML="Our informative tour will take you around the factory, allowing you a peek inside the secretive world of chocolate-making. We’ll provide a concise education on how we make our bean-to-bar chocolate, including our ingredients and the type of equipment utilized. We’ll also discuss our Direct Trade practices, our community involvement, Chocolate University, and even delve deep into each of our origins. And don’t fret, because we provide plenty of tasty samples of our chocolate at various stages of our process throughout the tour. Tours last approximately 45 minutes and you are welcome to stay and shop at your leisure, with your 10% tour discount.";
document.getElementById("p3").innerHTML="Tickets cost $5.00 for adults and $4.00 for children and students. Keep in mind that when you pay for your tour you are supporting Chocolate University—100% of your ticket price supports Chocolate University. ";

function myFunction1() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++)
     {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1)
         {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["pass"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
  if (y == "") {
    alert("Password must be filled out");
    return false;
  }
}

function validateForm1() {
  var fname = document.forms["myForm1"]["fname"].value;
  var lname = document.forms["myForm1"]["lname"].value;
  var uname = document.forms["myForm1"]["uname"].value;
  var rpass = document.forms["myForm1"]["rpass"].value;
  var cpassword = document.forms["myForm1"]["cpassword"].value;
  
  if (fname == "") {
    alert("Firstname must be filled out");
    return false;
  }
  if (lname == "") {
    alert("Lastname must be filled out");
    return false;
  }
  if (uname == "") {
    alert("Username must be filled out");
    return false;
  }

  if (rpass!=cpassword) {
    alert("Check password and confirmpassword");
    return false;
  }

}