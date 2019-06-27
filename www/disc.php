<?php
session_start();
if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
	{
		header("Location: /index.php"); 
	}
$link = mysqli_connect('localhost', 'root', '', 'db')
	or die("??? " . mysqli_error($link));
$link->set_charset('cp1251');

if (isset($_POST['remdisc'])) 
{
	$errors = array();

	if ($_POST['rem_disc'] == '') {
		$errors[] = 'Введите предмет';
	}
	if (empty($errors)) 
	{
		$discipline = $_POST['rem_disc'];
		$query = "SELECT disipline FROM disipline WHERE disipline='".$discipline."'"; 
		$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
		if($result)
	    	$disc = mysqli_fetch_row($result);
		if(isset($disc))
		{
			$query = "DELETE FROM disipline WHERE disipline='" . $discipline . "'";

	    	$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));		
	    	echo "<script>alert('Предмет удален!')</script>";
	    }	    	
	    else
	    	echo "<script>alert('Такого предмета нет')</script>";

	}	
	else 
	{
		echo "<script>alert('" . array_shift($errors) . "')</script>";
	}
}

if (isset($_POST['adddisc'])) 
{
	$errors = array();

	if (trim($_POST['add_disc']) == '') {
		$errors[] = 'Введите предмет';
	}

	if (empty($errors)) 
	{
		$discipline = $_POST['add_disc'];

		$query = "SELECT disipline FROM disipline WHERE disipline='".$discipline."'"; 
		$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
		if($result)
	    	$disc = mysqli_fetch_row($result);
		if(isset($disc))
	    	echo "<script>alert('Такой предмет уже есть в Базе Данных')</script>";
	    else
	    {
	    	$query = "INSERT INTO disipline VALUES('".$discipline."')";

			$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));	
			echo "<script>alert('Предмет добавлен!')</script>";
	    }		
	}	
	else 
	{
		echo "<script>alert('" . array_shift($errors) . "')</script>";
	}
}

?>


<html>

<body>
			<p>Добавление предмета</p>
			<form method='post' action='disc.php'>
				<!--??? ???-->
				<input type='text' name='add_disc' placeholder="предмет">
				<input type='submit' name='adddisc' value="Добавить" class="btn">
			</form>
			<p>Удаление предмета</p>
			<form method='post' action='disc.php'>
				<!--??? ???-->
				<input type='text' name='rem_disc' placeholder="предмет">
				<input type='submit' name='remdisc' value="Удалить" class="btn">
			</form>

</body>

</html>