<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Card</title>
	<link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <style type="text/css">
        .btn:hover{
            background-color: #A18EB9;
        }
    </style>
</head>
<body>
    <?php include "header.php" ?>

<div class="wrapper">
    <div class="left">
        <img src="plumbing.png" alt="">
        <h4>Name:Johnny Bravo</h4>
         <h4>Profession:Plumber</h4>
         <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
            </div>
    </div>

    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="location_data">
                   <h4>Location</h4>
                   <p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">View Location</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}

</script>

                </div>                
            </div>
            <a href="portfolio.php"><button style="background: #A6B98E; font-size: 15px; margin-top: 50px;" class="btn">View Portfolio</button></a><br>
            <a href=""><button style="background: #A6B98E; font-size: 15px; margin-top: 30px;" class="btn">Request</button></a>
        </div>           
    </div>
</div>
<footer>
<?php include "footer.php" ?>
</footer>
</body>
</html>
