<?php
	$login = $_POST['uname'];
	$haslo = $_POST['psw'];



	$login = stripcslashes($login);
	$haslo = stripcslashes($haslo);
	$imie = stripcslashes($imie);
	$login = mysql_real_escape_string($login);
	$haslo = mysql_real_escape_string($haslo);
	$imie = mysql_real_escape_string($imie);

	mysql_connect("localhost", "root", "");
	mysql_select_db("dentista");
	
	$result = mysql_query("select * from users where login = '$login' and haslo = '$haslo'")
		or die ("Failed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	
	if ($row['username']== $username && $row['haslo']== $haslo){
		echo "Sukces! Witaj ".$row['imie'];
	} else {
		echo "Błąd logowania, spróbuj ponownie";
		
	}
		

?>