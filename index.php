
<?php 

include("connection.php");
if(isset($_SESSION["LOGGEDIN"])){
	unset($_SESSION["LOGGEDIN"]);
	session_destroy();
}
include("header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {
	font-family: "Montserrat", sans-serif}
img {
	margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <p>Please login to continue.</p>
    <hr>
    <form action="action_page.php" method="POST">
      
      <input type="text"  class=required placeholder="Username" name="username">
      <input type="password" required  placeholder="Password" name="psw">
	  <input type="hidden" name="action" value="login">
     <hr>
    <input type="hidden" name="action" value="login">
    <button type="submit" class="registerbtn">Login</button>
  	</div>
	<div class="container signup">
    <p>New user? <a href="register.php">Sign Up</a>.</p>
  </div>
 </form>
<div style="padding-left:16px"> 
</div>
</body>
</html>
<?php
include("footer.php");
?>