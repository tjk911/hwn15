<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="http://www.gannett-cdn.com/sites/lohud/images/favicon.png">
    <title>Halloween</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <!--  <script src="js/leaflet-providers.js"></script>
    <script src="js/leaflet-hash.js"></script> -->
    <?php
      include('chartbeat.php')
    ?>
  </head>
  <body>
  <div class="fixed" style='height:77px !important;'>
    <nav class="top-bar" id='banner' style="height:77px !important;" data-topbar role="navigation"></nav>
  </div>
  <!-- <div id='banner' style="height:77px;"></div> -->
  <script>
  if(window.self==window.top) {
    var banner = document.getElementById("banner");
    banner.style.backgroundColor = "black"; 
    banner.style.height = "77px";
    banner.innerHTML = "<a href='http://www.lohud.com'><img src='http://data.lohud.com/lohud%20logos/site-masthead-logo.png' width='300' /></a><br>";
  }
  </script>  