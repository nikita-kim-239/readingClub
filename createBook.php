<?php
	
	$mysqli = new mysqli("localhost","root","","readingClub");
	$mysqli->set_charset("utf8");
	$name=null;
	if (isset($_POST['name']))
		$name=$_POST['name'];
	$sql = "insert into books (name) values ('$name')";
	if (isset($_POST['name']))
		$mysqli->query($sql);
	$mysqli->close();
	header("Location: index.php");
?>