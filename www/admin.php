<?php
session_start();
	if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
		{
			header("Location: /index.php"); 
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>�������</title>
</head>
<body>
	<a href="group.php">���������� ������</a><br>
	<a href="stud.php">�������� ��������</a><br>
	<a href="prep.php">�����������/�������� �������������/��������������</a><br>
	<a href="disc.php">����������/�������� ��������</a><br>
</body>
</html>