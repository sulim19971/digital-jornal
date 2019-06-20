<?php
		session_start();
		if(isset($_POST['send']))
		{
			if(trim($_POST['group']) == '')
			{
				$errors[] = 'Введите группу';
			}

			if(trim($_POST['discipline']) == '')
			{
				$errors[] = 'Введите предмет';
			}
			if(empty($errors))
			{
				$_SESSION['group'] = $_POST['group'];
				$_SESSION['discipline'] = $_POST['discipline'];
				header("Location: /page1.php");
			}
			else
			{
				echo "<script>alert('".array_shift($errors)."')</script>";
			}	
		}
?>

<html>
<head>
	
	<title></title>
	<meta charset="windows 1251">
</head>
<body>

	<form method='post' action='index.php'>
		
    <input type='input' name='group' placeholder="группа"> <!--Вводим группу -->
     <input type='input' name='discipline' placeholder="предмет"> <!--Вводим предмет-->
    <input type='submit' name = 'send'>
</form>
</body>
</html>
