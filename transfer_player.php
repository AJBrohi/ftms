<?php
  session_start();
  require_once('dbconfig/config.php');
  //phpinfo();
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


$query = "SELECT players.Name,players.Age, players.Position, players.Nationality, players.Club, players.Goals_Scored, players.Assist, players.Red_Cards, players.Yellow_Cards, players.Clean_Sheets, players.Goals_Conceded FROM players WHERE NOT EXISTS (SELECT player_id FROM my_players WHERE players.player_id = my_players.player_id AND my_players.username = '".$_SESSION['username']."') ORDER BY $order $sort";

$query_run = mysqli_query($con,$query);

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Transfer Player</title>
  
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="admin_homepage.php">Football Team<span class="logo_colour"> Management System </span></a></h1>
          <h2>Become The Manager of Your Own Team</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="my_team.php">My Team</a></li>
          <li class="selected"><a href="transfer_player.php">Transfer Player</a></li>
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
            
            <h3>Hello <?php echo $_SESSION['username']; ?> </h3>
            <h4>Wanna Add a Player?</h4>
            <?php 
                  $query1 = "SELECT players.Name FROM players WHERE NOT EXISTS (SELECT player_id FROM my_players WHERE players.player_id = my_players.player_id AND my_players.username = '".$_SESSION['username']."') ORDER BY $order $sort";

                    $query1_run = mysqli_query($con,$query1);

             ?>
            <form action = "checkbox.php" method ="post">
              <?php  
        while ($row = mysqli_fetch_assoc($query1_run)) 
          { ?>
              <input type = "checkbox" name= "chk1[]" > <?php echo $row["Name"]; ?> <br/>
              <br>
              <?php 
          } ?>
              <input type ="submit" name="Submit" value ="Submit">
            </form>

          </div>
          
        </div>
        
      </div>
      <div id="content">
        <h1 text align="center">Transfer A Player</h1>

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
