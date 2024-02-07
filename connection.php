<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $conn = mysqli_connect ($servername , $username , $password) or die("unable to connect to host");  
       mysqli_select_db ($conn,'jkedu_new') or die("unable to connect to database"); 
?>   