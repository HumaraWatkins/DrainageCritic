<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>Drainage Critic - Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    
 <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">     
    
    <style>

    /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
    </style>
 
    </head>
<body>

    <div class="section group">
	<div class="col span_1_of_3">
<img src = "images/logo.jpg">
	</div>
	<div class="col span_2_of_3">
        
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="services.php">Our Services</a>
  <a href="aboutus.php">About Us</a>
  <a href="contactus.php">Contact Us</a>
</div>      
	

	</div>
</div>
<div class="section group">
	<div class="col span_3_of_3">
<img src ="images/house.jpg">
	</div>
</div>

<div class="section group">
	<div class="col span_1_of_3">
	<?php
include('setup.php');
$sql = "SELECT id, title1, para1, img1 FROM pages";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<img src= 'images/".$row["img1"]."'>";
    echo "id: " . $row["id"]. " - title: " . $row["title1"]. " " . $row["para1"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($con);
?>
	</div>
	<div class="col span_1_of_3">
	This is column 2
	</div>
	<div class="col span_1_of_3">
	This is column 3
	</div>
</div>
    
</body>
</html>
