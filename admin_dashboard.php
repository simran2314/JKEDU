<?php 

include("connection.php");

?>

<!DOCTYPE html> 
<html>
<title>JKEDU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="logo" href="C:\xampp\htdocs\rpa" type="image/x-icon" />


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>

<body>

<!-- Facebook Plugin -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="Vwcbe8C7"></script>

<!-- Sidebar -->
<nav class="w3-sidebar w3-green w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-green w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a onclick="window.location.href='about.php'" class="w3-bar-item w3-button ">About</a>
    <a onclick="window.location.href='institutions.php'" class="w3-bar-item w3-button w3-text-white w3-hover-white">Institutions</a>
    <a onclick="window.location.href='Contact.php'" class="w3-bar-item w3-button w3-text-white w3-hover-white">Contact</a>
    <button class="w3-button w3-green" onclick="window.location.href='index.php'">Logout</button>
  </div>
</nav>
<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<span class="w3-button w3-xxlarge w3-white w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></span> 
<div class="w3-clear"></div>
<header style="background: #bddaa5;"><center><img src="logo.png" class="img-responsive" width="100" height="100"></center></header>
<header class="w3-center w3-margin-bottom">
  <h1><b>JKEDU</b></h1>
  <p><b>One stop portal for Education.</b></p>
      <a onclick="get_schools()" class="w3-bar-item w3-button w3-green">Schools</a>
      <a onclick="get_colleges()" class="w3-bar-item w3-button w3-green">Colleges</a>
      <a onclick="get_universities()" class="w3-bar-item w3-button w3-green">Universities</a>
      <a onclick="get_kvs()" class="w3-bar-item w3-button w3-hide-small w3-green">Kendriya Vidyalaya</a>
</header>

</div>
<center><div id="loader" style="display: none;"><img src="loader.gif" style="height: 200px;"></div></center>
<div id="response"></div>


<!-- Facebook Content -->
<center><div class="fb-page" data-href="https://www.facebook.com/jkedu.in/" data-tabs="timeline" data-width="400" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jkedu.in/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jkedu.in/">JKEDU</a></blockquote></div></center>





</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"> 
  <p class="w3-medium"></p>Reach us at
  <a href="http://www.facebook.com/jkedu.in" target="_blank"> 
  <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
  <a href="http://www.instagram.com/jkedu.in" target="_blank"> 
  <i class="fa fa-instagram w3-hover-opacity"></i></a>

  </footer>



<!-- Buttons for refreshing reviews -->
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





 
  
<script>

function get_colleges(){
  $.ajax({
    url: "get_data.php", 
    method:"POST",
    data:{param:'college'},
    beforeSend: function(){
      $("#loader").show();  
    },
    success: function(result){
        $("#loader").hide();
        $("#response").html(result);

  }});
}
function get_universities(){
  $.ajax({
    url: "get_data.php", 
    method:"POST",
    data:{param:'university'},
    beforeSend: function(){
      $("#loader").show();  
    },
    success: function(result){
        $("#loader").hide();
        $("#response").html(result);

  }});
}


function get_schools(){

  $.ajax({
    url: "get_data.php", 
    method:"POST",
    data:{param:'Schools'},
    beforeSend: function(){
      $("#loader").show();  
    },
    success: function(result){
        $("#loader").hide();
        $("#response").html(result);

  }});
}


function get_kvs(){
  $.ajax({
    url: "get_data.php", 
    method:"POST",
    data:{param:'Kendriya Vidyalaya'},
    beforeSend: function(){
      $("#loader").show();  
    },
    success: function(result){
        $("#loader").hide();
        $("#response").html(result);

  }});
}

// Toggle grid padding
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}

// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}


</script>


</body>
</html>