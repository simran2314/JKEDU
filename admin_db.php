<?php

include("connection.php");

?>



<html>
<head>
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #26ddd5;
    
  }
  .container {
    padding: 80px 120px;
  }
  
  </style>
</head>
<header style="background: #bddaa5;"><center><img src="logo.png" class="img-responsive" width="100" height="100"></center>
</header>

<script language="javascript" type="text/javascript">
    function refresh_school_reviews(){
        window.location = 'school_script.php?run=shell';
    }

    function refresh_college_reviews(){
        window.location = 'college_script.php?run=shell';
    }

    function refresh_university_reviews(){
        window.location = 'university_script.php?run=shell';
    }
</script>

</head>
<body>
  <center>
<input type="button" onclick="refresh_school_reviews()" value="Refresh School Reviews">
<input type="button" onclick="refresh_college_reviews()" value="Refresh College Reviews">
<input type="button" onclick="refresh_university_reviews()" value="Refresh University Reviews">

</center>

</body>
</html>