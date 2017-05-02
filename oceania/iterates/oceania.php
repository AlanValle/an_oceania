<?php
	//$conn=mysqli_connect("localhost","root","","oceania");
	//$querry='selec FROM * alumno;';
	//$res=mysqli_query($conn,$querry);
echo"	<!DOCTYPE html>
		<html>
		<head>
			<meta charset='utf-8'/>
			<title>Oceanía</title>
			<link rel='stylesheet'type='text/css'href='../style/estilado.css'/>
		</head>
		<body>";
echo"	<a href='http://localhost/oceania/iterates/oceania.php'><img src='../resources/images/oceania.jpg'></a>
		<h1><center>Welcome to Oceania:</center></h1>
		<fieldset>
			<legend><h1>Search</h1></legend>
			<form method='POST'>
			<input type='text' name='specie' size='40' maxlength='40' placeholder='Search by specie..'/>
			<input type='submit' class='button'value='Search'/>
			<input type='reset' class='button'value='Reset'/>
			</form>
		</fieldset>";
echo"	</body>
		</html>";
?>