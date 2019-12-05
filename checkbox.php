<?php
  session_start();
  require_once('LoginPage/dbconfig/config.php');
  //phpinfo();

  $rows = $_POST['chk1'];
if($_POST["Submit"] == "Submit")
{

    for ($i = 0; $i < sizeof($rows);$i++)
    {
      $query = "INSERT INTO my_players(player_id,username) VALUES ((SELECT player_id FROM players WHERE players.Name = '".$rows[$i]."'),'".$_SESSION['username']."')";
      //$query = "INSERT INTO my_players(username,player_id) SELECT '".$_SESSION['username']."', player_id FROM players WHERE players.Name = '".$checkbox1[$i]."' ";
       
       $query_run = mysqli_query($con,$query); 
       
        
    }

    if ($query_run) 
       {
	    echo "New Player Added successfully";
	} 
	else 
	{
	    echo "Error: " . $query . "<br>" . $con->error;
	}
    
    $con->close();
}
?>

