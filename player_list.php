<?php
session_start();
require("dbconfig/config.php");

if (isset($_GET['order'])) 
{
  $order = $_GET['order'];
}
else
{
  $order = 'position';
}

if (isset($_GET['sort'])) 
{
  $sort = $_GET['sort'];
}
else
{
  $sort = 'ASC';
}

$query = "SELECT players.Name,players.Age, players.Position, players.Nationality, players.Club, players.Goals_Scored, players.Assist, players.Red_Cards, players.Yellow_Cards, players.Clean_Sheets, players.Goals_Conceded FROM  players ORDER BY $order $sort";

$query_run = mysqli_query($con,$query);

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
  <div id="main">
    <div id="header" style="background: #3e5fc1">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="admin_homepage.php">Admin<span class="logo_colour"> Panel </span></a></h1>
          <h2>Here We Control Everything</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="admin_homepage.php">Home</a></li>
          <li><a href="add_player.php">Add Player</a></li>
          <li class="selected"><a href="player_list.php">All Players</a></li>
          <li><a href="logout.php"><button type="button" class="back_btn"> Log Out </button></a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div id="banner">
          <img src="imgs/Logo.jpg">

      </div>
      
      <div id="content">
        <h1 text align="center">All Players List</h1>
        
        <?php $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC'; ?>

  <table border = "1">
    <tr>
      <th><a href="">Select</a></th>
      <th><a href="?order=name&&sort=<?=$sort?>">Name</th>
      <th><a href="?order=age&&sort=<?=$sort?>">Age</th>
      <th><a href="?order=position&&sort=<?=$sort?>">Position</th>
      <th><a href="?order=nationality&&sort=<?=$sort?>">Nationality</th>
      <th><a href="?order=club&&sort=<?=$sort?>">Club</th>
      <th><a href="?order=goals_scored&&sort=<?=$sort?>">Goals Scored</th>
      <th><a href="?order=assist&&sort=<?=$sort?>">Assist</th>
      <th><a href="?order=red_cards&&sort=<?=$sort?>">Red Cards</th>
      <th><a href="?order=yellow_cards&&sort=<?=$sort?>">Yellow Cards</th>
      <th><a href="?order=clean_sheets&&sort=<?=$sort?>">Clean Sheets</th>
      <th><a href="?order=goals_conceded&&sort=<?=$sort?>">Goals Conceded</th>
    </tr>

        <?php  
        while ($row = mysqli_fetch_assoc($query_run)) 
          { 
            
            ?>
            <tr>
              <td><input type="checkbox"></td>
              <td> <?php echo $row["Name"]; ?></td>
              <td> <?php echo $row["Age"]; ?></td>
              <td> <?php echo $row["Position"]; ?></td>
              <td> <?php echo $row["Nationality"]; ?></td>
              <td> <?php echo $row["Club"]; ?></td>
              <td> <?php echo $row["Goals_Scored"]; ?></td>
              <td> <?php echo $row["Assist"]; ?></td>
              <td> <?php echo $row["Red_Cards"]; ?></td>
              <td> <?php echo $row["Yellow_Cards"]; ?></td>
              <td> <?php echo $row["Clean_Sheets"]; ?></td>
              <td> <?php echo $row["Goals_Conceded"]; ?></td>
            </tr>
          
          <?php 
          } ?>


  </table>
      </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; Brohi | Tahseen | Tamim | Nayon</p>
    </div>
</body>
</html>
