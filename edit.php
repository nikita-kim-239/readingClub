
<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Редактировать книгу</title>
 </head>
 <body>
 <form method="post" action="edit.php">
	<p> Название: <input type="text" name="name"/></p>
	
	<?php 
	$id=null;
	if (isset($_GET['id']))
				$id=$_GET['id'];
	echo "<input type='hidden' name='id' value='".$id."'/>" ?>
	<button type="submit">Редактировать</button>
  </form>
 
  </body>
</html>

<?php

	
		
			$mysqli = new mysqli("localhost","root","","readingClub");
			$mysqli->set_charset("utf8");
			$name=null;
			
			
			
			if (isset($_POST['name']))
				$name=$_POST['name'];
			$id2=null;
			if (isset($_POST['id']))
				$id2=$_POST['id'];
			$sql = "update books set name='$name' where id='$id2'";
			if (isset($_POST['name']))
				{
					$mysqli->query($sql);
					$mysqli->close();
					header("Location: index.php");
				}
	
?>
