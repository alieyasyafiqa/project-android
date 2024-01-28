<!DOCTYPE html>
<html>
<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  /* Add this style to change the color of the navigation bar to blue */
  .w3-teal {
    background-color: #00BCD4 !important; /* Use !important to override existing styles */
  }
</style>

<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="info.php" class="w3-bar-item w3-button">View Crowd Report</a>
  <a href="add_news.php" class="w3-bar-item w3-button">Add News</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
  <h1>Welcome, Admin!</h1>
  </div>
</div>


<div class="w3-container">
<p>Here You Can View Crowd Report And Add Latest News Into The CrowdVigil App.</p>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
