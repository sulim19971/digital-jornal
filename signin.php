<?php

		session_start();
		$link = mysqli_connect('localhost', 'root', '', 'db') 
	    or die("??? " . mysqli_error($link));     
		$link->set_charset('cp1251');

		if(isset($_POST['signin']))
		{
			$errors = array();

			if(trim($_POST['login']) == '')
			{
				$errors[] = 'Введите логин';
			}

			if(trim($_POST['password']) == '')
			{
				$errors[] = 'введите пароль!';
			}
			if(empty($errors))
			{
				$login = $_POST['login'];
				$password = $_POST['password'];

			
				$query = "SELECT password FROM users WHERE login='".$login."'"; 
				$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
				if($result)
	    			$pass = mysqli_fetch_row($result);
	    		if($password == $pass[0])
				{
					$_SESSION['login'] = $login;
					header("Location: /index.php"); //перенаправление при успешной авторизации
				}
				else
					echo "<script>alert('неверный пароль!')</script>";
			}
			else
			{
				echo "<script>alert('".array_shift($errors)."')</script>";
			}		
		}

	?>
	

<html>

<body>


	<form method='post' action='signin.php'>
			<!--??? ???-->
    	<input type='text' name='login' placeholder="login"> 
    		<!--??? ??? -->
     	<input type='password' name='password' placeholder="password"> 
    <input type='submit' name = 'signin'>
</form>
</body>
</html>
