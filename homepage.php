<?php
  session_start();
  require_once('dbconfig/config.php');
  //phpinfo();
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Football Team Management System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Football Team<span class="logo_colour"> Management System</span></a></h1>
          <h2>Become The Manager of Your Own Team</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="homepage.php">Home</a></li>
          <li><a href="my_team.php">My Team</a></li>
          <li><a href="transfer_player.php">Transfer Player</a></li>
          <li><a href="logout.php"><button type="button" class="back_btn"> Log Out </button></a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="banner">
          <img src="imgs/Logo.jpg">

      </div>
	  <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_item">
            
            <h3>Latest News</h3>
            <h4>Eden Hazard Edging Towards Real Madrid for 100M Euro</h4>
            <h5>7th April 2019</h5>
            <p>Chelsea are holding out for over £100m from Real Madrid for Eden Hazard<br /><a href="#">Read more</a></p>

          </div>
        </div>
      </div>
      <div id="content">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <p></p>
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; Brohi | Tahseen | Tamim | Nayon</p>
    </div>
  </div>
</body>
</html>
