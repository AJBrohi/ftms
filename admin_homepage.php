<?php
  session_start();
  require_once('dbconfig/config.php');
  //phpinfo();
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Admin Panel</title>
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>

<body>
  <div id="main">
    <div id="header" style="background: #3e5fc1">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html">Admin<span class="logo_colour">Panel</span></a></h1>
          <h2>Here We Control Everything</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="admin_homepage.php">Home</a></li>
          <li style="background: #3e5fc1"><a href="add_player.php">Add Player</a></li>
          <li><a href="player_list.php">All Players</a></li>
          <li><a href="logout.php"><button type="button" class="back_btn"> Log Out </button></a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
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
        
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; Brohi | Tahseen | Tamim | Nayon</p>
    </div>
  </div>
</body>
</html>