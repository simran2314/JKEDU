<?php 

include("connection.php");
session_start();
?>
<!DOCTYPE html> 
<html>
<title>JKEDU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="logo" href="C:\xampp\htdocs\JKEDU\Images\logo.png" type="image/x-icon" />

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
  .w3-green, .w3-hover-green:hover {
    color: #fff!important;
    background-color: #4CAF50!important;
    padding: 50px 40px;
  }
  .w3-blue, .w3-hover-blue:hover {
    color: #fff!important;
    background-color: #2196F3!important;
    padding: 50px 40px;
  }
  .w3-red, .w3-hover-red:hover {
    color: #fff!important;
    background-color: #e20d0d!important;
    padding: 50px 40px;
  }
  .w3-yellow, .w3-hover-yellow:hover {
    color: #fff!important;
    background-color: #ffeb3b!important;
    padding: 40px 40px;
  }

</style>

<body>
  <!-- Facebook Plugin -->
  <div id="fb-root"></div> 
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="Vwcbe8C7"></script>

<!-- Facebook Messenger Plugin
<div class="fb-customerchat"
 page_id="<PAGE_ID>">
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-green w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-green w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a onclick="window.location.href='about.php'" class="w3-bar-item w3-button w3-hover-white">About</a>
    <a onclick="window.location.href='institutions.php'" class="w3-bar-item w3-button w3-text-white w3-hover-white">Institutions</a>
    <a onclick="window.location.href='Contact.php'" class="w3-bar-item w3-button w3-text-white w3-hover-white">Contact</a>
    <a onclick="window.location.href='index.php'" button class="w3-bar-item w3-button w3-green w3-hover-white" >Logout</a>
  </div>
</nav>
<!-- !PAGE CONTENT! -->
<header style="background: #bddaa5;"><center><img src="logo.png" class="img-responsive" width="100" height="100"></center></header>
<div class="w3-content" style="max-width:1500px">

  <!-- Header -->