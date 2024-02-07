
<?php 

include("connection.php");
if(isset($_SESSION["LOGGEDIN"])){
	unset($_SESSION["LOGGEDIN"]);
	session_destroy();
}


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav input[type=password] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  width: 100%;
    padding: 12px;
    border: none;
    border-radius: 4px;
    margin: 5px 0;
    opacity: 0.85;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>

</head>
<body>

<div class="topnav">
  
  <div class="login-container">
  
    <form action="action_page.php" method="POST">
      <input type="text" required placeholder="Username" name="username">
      <input type="password" required  placeholder="Password" name="psw">
	  <input type="hidden" name="action" value="login">
      <button type="submit">Login</button>
    </form>
  </div>
</div>

<div>
<form action="/action_page.php">
  <p>Are you :</p>
  <input type="radio" onclick="window.location.href='index.php'" id="user" name="usertype" value="user">
  <label for="user">User</label><br>
  <input type="radio" onclick="window.location.href='admin_login.php'" id="admin" name="usertype" value="admin">
  <label for="admin">Admin</label><br>
  
</form>
</div>

<div class="container signup">
    <p>New user? <a href="register.php">Sign Up</a>.</p>
  </div>

<div style="padding-left:16px">
  
</div>

</body>
</html>