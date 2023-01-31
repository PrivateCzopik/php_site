<!DOCTYPE html>
<html>
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
<?php
session_start();
	$db = mysqli_connect('localhost', 'root', '', 'kawiarnia', 3306);
	
	if(!$db)
		die("Błąd Połączenia z bazą danych" . mysqli_connect_error());
	
	if(!empty($_POST['register']))
		if($_POST['register'] == "Zaloguj")
		{
			$error =0;
      if(empty($_POST['Email']) || !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))
				{
					echo "Nieprawidłowy format adresu email";
					$error++;
				}	
			if($_POST['Password'] == false)
				{
					echo "Wpisz Hasło";
					$error++;
				}
        if($error == 0)
        {
          $query = "SELECT * FROM users WHERE email like '".$_POST['Email']."'";
          $sql = mysqli_query($db,$query);
          while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
            if($row['hashpassword'] == hash('md5',$_POST['Password']))
            {
               $_SESSION['user_id'] = $row['id'];
               header("location: index.php");
            }
            else
              echo "Błędne hasło";
             
        }
			
			
						
		
		}

		


?>

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



<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">


<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">tttryyyyy</span></h5>
    <p>tttryyyyy</p>
    <img src="pobrane.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag">tttryyyyy</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non ante id enim ultricies interdum.</p>
    <p><strong>tytyryyyyy</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non ante id enim ultricies interdum.</p>
   
   <form action="zaloguj.php" method="post">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Hasło" required name="Password"></p>
      <p>
		<input class="w3-input w3-padding-16 w3-border" name="register" value="Zaloguj" type="submit"></p>

  
	</form>
		<p><a href="zarejestruj.php"><input class="w3-input w3-padding-16 w3-border" name="register" value="Zarejestruj" type="submit"></a> </p>
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
