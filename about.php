
<?php 

include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
    margin:10;padding:10
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



<hr>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<center>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="jammuuniversity.jpg" alt="JU" width="700" height="500">
        <div class="carousel-caption">
          <h3>University of Jammu</h3>
          <!--<p>.</p>-->
        </div>      
      </div>

      <div class="item">
        <img src="kashmiruniversity.jpg" alt="KU" width="800" height="600">
        <div class="carousel-caption">
          <h3>University of Kashmir</h3>
         <!-- <p>.</p>-->
        </div>      
      </div>
    
      <div class="item">
        <img src="smvdu.jpg" alt="Los Angeles" width="700" height="500">
        <div class="carousel-caption">
          <h4>Shri Mata Vaishno Devi University</h4>
          
        </div>      
      </div>
    </div>
    </center>
<!-- Container  -->
<div id="band" class="container text-center">
  <h3>About JKEDU</h3>
  <p><em>One stop portal for Education.</em></p>
  <p>In today’s fast growing and technology driven world students often find it difficult to select the right educational institute to train themselves be it School, College, University, Coaching Institute or an institute of vocational courses, they can be duped by bad advice by people and suffer later. To find the right institutes according to student’s need, choice and affordability can be difficult, gathering the correct data about the ratings, rankings, infrastructures of an institute can be almost impossible for them. JKEDU is institute recommendation website which will give information about the educational institutes across Jammu and Kashmir. Other than giving the general overview of the institutes it will also give details about the courses available, intake capacity, annual fees, notable alumni and accommodation facilities available. It is an online community of educational institutes in J&K where students can explore and judge institutes on various parameters and read reviews.</p>
  
<!-- Image of location/map -->
<script>
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
