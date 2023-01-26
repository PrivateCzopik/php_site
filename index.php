<!DOCTYPE html>
<html><?php session_start();?>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("pobrane.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="index.php" class="w3-button w3-block w3-black">O NAS</a>
    </div>
    <div class="w3-col s3">
      <a href="kontakt.php" class="w3-button w3-block w3-black">KONTAKT</a>
    </div>
    <div class="w3-col s3">
      <a href="menu.php" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <?php
     if(isset($_SESSION['user_id']))
      echo '<div class="w3-col s3">
      <a href="wyloguj.php" class="w3-button w3-block w3-black">Wyloguj</a>
    </div>';
    else
      echo '<div class="w3-col s3">
      <a href="zaloguj.php" class="w3-button w3-block w3-black">ZALOGUJ</a>
    </div>';
    ?>
  </div>
</div>


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Otwarte od 7:00 do 20:00</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">KUCHNIA<br>JAPOŃSKA</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">15 Adr street, 5015</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non ante id enim ultricies interdum. Pellentesque eu augue risus. Mauris et quam at quam finibus elementum. Vestibulum eget enim id purus consequat aliquam id eget nulla. Proin pharetra sem sit amet lectus semper, non aliquam ex mollis. Quisque dictum lorem nec sapien laoreet, venenatis rutrum ipsum porta. Praesent et mattis nisi. In eget semper arcu, in mollis ante. Cras vel accumsan risus. Sed lacinia justo elit, ac interdum felis rutrum id. Pellentesque commodo porttitor nisi. Vestibulum ut mauris lectus. Sed erat ante, placerat eget turpis quis, convallis ornare purus. Suspendisse cursus neque at lorem vehicula pellentesque. Nullam sagittis non ante et dictum. Vivamus aliquam consequat ullamcorper.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non ante id enim ultricies interdum. Pellentesque eu augue risus. Mauris et quam at quam finibus elementum. Vestibulum eget enim id purus consequat aliquam id eget nulla. Proin pharetra sem sit amet lectus semper, non aliquam ex mollis. Quisque dictum lorem nec sapien laoreet, venenatis rutrum ipsum porta. Praesent et mattis nisi. In eget semper arcu, in mollis ante. Cras vel accumsan risus. Sed lacinia justo elit, ac interdum felis rutrum id. Pellentesque commodo porttitor nisi. Vestibulum ut mauris lectus. Sed erat ante, placerat eget turpis quis, convallis ornare purus. Suspendisse cursus neque at lorem vehicula pellentesque. Nullam sagittis non ante et dictum. Vivamus aliquam consequat ullamcorper.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non ante id enim ultricies interdum.</i></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non ante id enim ultricies interdum.</p>
    </div>
    <img src="pobrane.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Otwarte</strong> od 7:00 do 20:00</p>
    <p><strong>Address:</strong> bomsdmsdfjnsdfjksdf</p>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
