<?php
session_start();

if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
	{
		header("Location: /index.php"); 
	}

$link = mysqli_connect('localhost', 'root', '', 'db')
	or die("??? " . mysqli_error($link));
$link->set_charset('cp1251');

if (isset($_POST['remstud'])) 
{
	$errors = array();

	if (trim($_POST['rem_group']) == '') {
		$errors[] = 'Введите группу';
	}

	if ($_POST['rem_fio'] == '') {
		$errors[] = 'Введите фио';
	}
	if (empty($errors)) 
	{
		$group = $_POST['rem_group'];
		$fio = $_POST['rem_fio'];


		$query = "SELECT fio FROM information WHERE fio='".$fio."' AND gruppa = '".$group."'"; 
		$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
		if($result)
	    	$disc = mysqli_fetch_row($result);
		if(isset($disc))
		{
			$query = "DELETE FROM information WHERE fio='" . $fio . "' AND gruppa = '".$group."'";

    		$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));		
    		echo "<script>alert('Студент удален!')</script>";
	    }	    	
	    else
	    	echo "<script>alert('Такого студента нет')</script>";

		
	}	
	else 
	{
		echo "<script>alert('" . array_shift($errors) . "')</script>";
	}
}
?>


<html>

<body>
			
			<p>Удаление студента</p>
			<form method='post' action='stud.php'>
				<!--??? ???-->
				<input type='text' name='rem_group' placeholder="group">
				<!--??? ??? -->
				<input type='text' name='rem_fio' placeholder="fio"> <br>
				<input type='submit' name='remstud' value="Удалить" class="btn">
			</form>

</body>

</html>