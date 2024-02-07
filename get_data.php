<?php 

include("connection.php");


if(isset($_SERVER["REQUEST_METHOD"])&& $_SERVER["REQUEST_METHOD"]=="POST"){

	$colors=array();
	$colors=['success','primary','info','danger'];
	
	if(isset($_POST["param"])){

		if($_POST["param"]=="college"){
			$i=0;
			$sql="Select * from tbl_colleges";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)){
				echo"<table class='table'>";
				echo"<th>Name of the Institution</th><th>Address</th><th>City</th><th>Type of the Institution</th><th>Review</th>";
				while($rs=mysqli_fetch_array($result)){
					
					if($i>=3){
						$i=0;
					}else{
						$i++;
					}
					echo"<tr class='".$colors[$i]."'><td>".$rs["Title"]."</td><td>".$rs["Address"]."</td><td>".$rs["District"]."</td><td>".$rs["Type"]."</td><td><a target=_blank href=reviews.php?id=".$rs["ID"]."&type=college>View</a></td></tr>";

					
				}
				echo"</table>";
			}else{
				echo"Oops! No data was found!";
			}
		}

		if($_POST["param"]=="university"){
			$i=0;
			$sql="Select * from tbl_university";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)){
				echo"<table class='table'>";
				echo"<th>Name of the University</th><th>Website</th><th>Address</th><th>Head of the Institution</th><th>District</th><th>Reviews</th>";
				while($rs=mysqli_fetch_array($result)){
					if($i>=3){
						$i=0;
					}else{
						$i++;
					}
					echo"<tr class='".$colors[$i]."'><td>".$rs["Title"]."</td><td><a href=".$rs["Website"].">".'Click'."</a></td><td>".$rs["Address"]."</td><td>".$rs["Head"]."</td><td>".$rs["District"]."</td><td><a href=reviews.php?id=".$rs["ID"]."&type=university target=_blank>View</a></td></tr>";
					
				}
				echo"</table>";
			}else{
				echo"Oops! No data was found!";
			}
		}


		if($_POST["param"]=="Schools"){
			$i=0;
			$sql="Select * from tbl_schools";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)){
				echo"<table class='table'>";
				echo"<th >Name of the Institution</th><th>Address</th><th>Contact</th><th>E-Mail</th><th>Head of the Institution</th><th>Website</th><th>Reviews</th>";
				while($rs=mysqli_fetch_array($result)){
					if($i>=3){
						$i=0;
					}else{
						$i++;
					}
					echo"<tr class='".$colors[$i]."'><td>".$rs["Title"]."</td><td>".$rs["Address"]."</td><td>".$rs["Contact_No"]."</td><td>".$rs["Email"]."</td><td>".$rs["Head"]."</td><td>".$rs["Website"]."</td><td><a href=reviews.php?id=".$rs["ID"]."&type=school target=_blank>View</a></td></tr>";
					
				}
				echo"</table>";
			}else{
				echo"Oops! No data was found!";
			}
		}


		if($_POST["param"]=="Kendriya Vidyalaya"){
			$i=0;
			$sql="Select * from tbl_kvs";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)){
				echo"<table class='table'>";
				echo"<th>Name of the Institution</th><th>Head</th><th>Address</th><th>Email</th><th>Contact</th><th>Review</th>";
				while($rs=mysqli_fetch_array($result)){
					if($i>=3){
						$i=0;
					}else{
						$i++;
					}
					echo"<tr class='".$colors[$i]."'><td>".$rs["Title"]."</td><td>".$rs["Head"]."</td><td>".$rs["Address"]."</td><td>".$rs["Email"]."</td><td>".$rs["Contact_No"]."</td><td><a href=reviews.php?id=".$rs["ID"]."&type=kv target=_blank>View</a></td></tr>";
					
				}
				echo"</table>";
			}else{
				echo"Oops! No data was found!";
			}
		}

	}


}
?>