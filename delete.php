<?php
	$mysqli = new mysqli("localhost","root","","readingClub");
	$mysqli->set_charset("utf8");
	$id=null;
	if (isset($_GET['id']))
		$id=$_GET['id'];
	$sql = "delete from books where id='$id'";
	if (isset($_GET['id']))
		$mysqli->query($sql);
	$mysqli->close();
	header("Location: index.php");

?>