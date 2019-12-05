<?php
session_start();
require("dbconfig/config.php");
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Admin Panel</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
  <div id="main">
    <div id="header" style="background: #3e5fc1">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="admin_homepage.php">Admin<span class="logo_colour">Panel</span></a></h1>
          <h2>Here We Control Everything</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="admin_homepage.php">Home</a></li>
          <li class="selected"><a href="add_player.php">Add Player</a></li>
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
      
      <div id="content" style="width: 100%">
        <h1 text align="center">Add a New Player</h1>
          <form action="insert.php" method="post">
    <span class="form_field_name">Name: </span> <input type="text" name="name" style="margin-left:20px;"/> 
    
    <span class="form_field_name">Age: </span><input type="text" name="age" />

    <span class="form_field_name">Position: </span><input type="text" name="position"/>
    <br>

    <span class="form_field_name">Nationality: </span><input type="text" name="nationality"/>

    <span class="form_field_name">Club: </span><input type="text" name="club" />
    

    <span class="form_field_name">Goals Scored: </span><input type="text" name="goals_scored" />
    <br>

    <span class="form_field_name">Assist: </span><input type="text" name="assist" />
    

    <span class="form_field_name">Red Cards: </span><input type="text" name="red_cards" />
    

    <span class="form_field_name">Yellow Cards: </span><input type="text" name="yellow_cards" />
    <br>

    <span class="form_field_name">Cleen Sheets: </span><input type="text" name="clean_sheets" />
    

    <span class="form_field_name">Goals Conceded: </span><input type="text" name="goals_conceded" />
    <input class="button" type="submit"/>

  </form>
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; Brohi | Tahseen | Tamim | Nayon</p>
    </div>
  </div>
</body>
</html>
