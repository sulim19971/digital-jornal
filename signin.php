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
				$errors[] = 'Введите логин!';
			}

			if(trim($_POST['password']) == '')
			{
				$errors[] = 'Введите пароль!';
			}
			if(empty($errors))
			{
				$login = $_POST['login'];
				$password = $_POST['password'];

			
				$query = "SELECT password FROM users WHERE login='".$login."'"; 
				$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
				if($result)
	    			$pass = mysqli_fetch_row($result);

				if($pass[0] == $password)
				{
					$_SESSION['login'] = $login;
					header("Location: /index.php"); //перенаправление при успешном входе
				}
				else
					$errors[] = 'Неверный логин или пароль!';
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
			<!--Вводим логин -->
    	<input type='text' name='login' placeholder="login"> 
    		<!--Вводим пароль -->
     	<input type='password' name='password' placeholder="password"> 
    <input type='submit' name = 'signin'>
</form>
</body>
</html>
