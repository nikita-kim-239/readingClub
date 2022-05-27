<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Читальный клуб</title>
 </head>
 <body>
 <?php
	$mysqli = new mysqli("localhost","root","","readingClub");
	$mysqli->set_charset("utf8");
	$sql = "select * from books";
	
 ?>
  <a href="createBook.html">Добавить книгу</a>
  <h1>Список книг</h1>
  <table border="1">
	<tr>
	  <th>Id</th>
	  <th>Название</th>
	  <th></th>
	  <th></th>
	  <th></th>
	</tr>
	
	  <?php
	   if ($books = $mysqli->query($sql))
	   {   
			foreach($books as $row)
			{	echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["name"]."</td>";
				echo "<td><select>";
				echo "<option value='0'>0</option>";
				echo "<option value='1'>1</option>";
				echo "<option value='2'>2</option>";
				echo "<option value='3'>3</option>";
				echo "<option value='4'>4</option>";
				echo "<option value='5'>5</option>";
				echo "</select></td>";
				echo "<td><a href='edit.php?id=".$row["id"]."'>Редактировать</a></td>";
				echo "<td><a href='delete.php?id=".$row["id"]."'>Удалить</a></td>";
				echo "</tr>";
			}
	   }
	   $mysqli->close();
	  ?>
	
  </table>
  </body>
</html>