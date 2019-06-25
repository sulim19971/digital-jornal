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
	 <link rel="stylesheet" href="login.css">
	<title></title>
	<meta charset="windows 1251">
</head>
<body>
<div class="gg">
        
        <div class="gg1">
        	<img src="27.png" style="width: 200px;" class="icon">
	<form method='post' action='index.php'  class="form">
    <input type='input' class="field" name='group' placeholder="group"> 
     <input type='input'class="field" name='discipline' 
     placeholder="discipline"> <br>
    <input class="btn" type='submit' name = 'send' value="">
</form>
</div>
</div>
</body>
</html>
