<?php 

include("connection.php");

$con = mysqli_connect("localhost","root","","jkedu_new");

$query = "SELECT * FROM tbl_university";
$result = $conn->query($query);



?>


<?php
    //initialize the array to store the processed data
    $jsonArray = array();
    //check if there is any data returned by the SQL Query
    if ($result->num_rows > 0) {
      //Converting the results into an associative array
      while($row = $result->fetch_assoc()) {
        $jsonArrayItem = array();
        $jsonArrayItem['label'] = $row['Title'];
        $jsonArrayItem['value'] = $row['District'];
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
      }
    }

    


?>









<html>
<title>Institutions</title>

  <head>

    <style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
</head>
<header style="background: #bddaa5;"><center><img src="logo.png" class="img-responsive" width="100" height="100"></center></header>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      google.charts.setOnLoadCallback(drawTaraChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawAnthonyChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Srinagar', 4],
          ['Jammu', 2],
          ['Rajouri', 2],
          ['Katra', 1]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'University district distribution',
                       width:500,
                       height:500};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
      }


      function drawTaraChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Private', 12],
          ['Government', 42]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'School Type',
                       width:500,
                       height:500};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Tara_chart_div'));
        chart.draw(data, options);
      }




      // Callback that draws the pie chart for Anthony's pizza.
      function drawAnthonyChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Jammu', 13],
          ['Srinagar', 16],
          ['Rajouri', 6],
          ['Samba', 3],
          ['Katra', 2],
          ['Reasi', 1],
          ['Leh', 1],
          ['Anantnag', 5]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'College district distribution',
                       width:500,
                       height:500};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="Anthony_chart_div" style="border: 1px solid #ccc"></div></td>

        <td><div id="Tara_chart_div" style="border: 1px solid #ccc"></div></td>

      </tr>
    </table>
  </body>
</html>