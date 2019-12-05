<?php
require('dbconfig/config.php');


	$name = $_REQUEST['name'];
	$age = $_REQUEST['age'];
	$position = $_REQUEST['position'];
	$nationality = $_REQUEST['nationality'];
	$club = $_REQUEST['club'];
	$goals_scored = $_REQUEST['goals_scored'];
	$assist = $_REQUEST['assist'];
	$red_cards = $_REQUEST['red_cards'];
	$yellow_cards = $_REQUEST['yellow_cards'];
	$clean_sheets = $_REQUEST['clean_sheets'];
	$goals_conceded = $_REQUEST['goals_conceded'];


	$sql = "INSERT INTO players (name, age, position, nationality, club, goals_scored, assist, red_cards, yellow_cards, clean_sheets, goals_conceded)
	VALUES ('$name', '$age', '$position', '$nationality', '$club', '$goals_scored', '$assist', '$red_cards', '$yellow_cards', '$clean_sheets', '$goals_conceded')";

	if (mysqli_query($con,$sql) === TRUE) {
	    echo '<script type="text/javascript">alert("New Player Added")</script>';
	    header("Location: add_player.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();

?>