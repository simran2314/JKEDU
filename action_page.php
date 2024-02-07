


<?php 

include("connection.php");


if(isset($_SERVER["REQUEST_METHOD"])&& $_SERVER["REQUEST_METHOD"]=="POST"){
	
	if(isset($_POST["action"]) && $_POST["action"]=="register"){
	
	//Insert user data into database
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["psw"];
	$sql="Insert into login(username,email,password)VALUES('".$username."','".$email."','".$password."')";
	
	if(mysqli_query($conn,$sql)){
		echo"<h1>You have ben registered successfully!</h1>";
		}else{
			
			echo"<h1>Something went wrong!</h1>";
		}
	}else{
		if($_POST["action"]=="login"){
				
			$sql="select * from login where username='".$_POST["username"]."' and password='".$_POST["psw"]."'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)){
				$rs=mysqli_fetch_array($result);
				session_start();
				$_SESSION["LOGGEDIN"]=1;
				$_SESSION["user"]=$rs["username"];
				$_SESSION["usercat"]=$rs["usertype"];
				header("Location:dashboard.php");

			}else{
				
				echo"<h3>Invalid username or password!</h3>";
				
			}
		}	
		
		
	}
}
else{
	
	echo"Sorry! Can't connect to server!";
	die();
}

?>
