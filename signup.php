<?php
		session_start();

		if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
		{
			header("Location: /signin.php"); 
		}




		$link = mysqli_connect('localhost', 'root', '1234', 'gg') 
	    or die("??? " . mysqli_error($link));     
		$link->set_charset('cp1251');

		if(isset($_POST['signup']))
		{
			$errors = array();

			if(trim($_POST['login']) == '')
			{
				$errors[] = '������� �����';
			}

			if($_POST['password'] == '')
			{
				$errors[] = '������� ������!';
			}
			if($_POST['password'] != $_POST['repeat_password'])
			{
				$errors[] = '������ �� ���������';
			}
			
			if(empty($errors))
			{
				$login = $_POST['login'];
				$password = $_POST['password'];

				
				$query = "SELECT login FROM users WHERE login='".$login."'"; 
				$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
				if($result)
	    			$pass = mysqli_fetch_row($result);
				if(isset($pass))
	    			echo "<script>alert('����� �����')</script>";
	    		else
	    		{
					if (!$link->query("INSERT INTO users VALUES ('".$login."', '".$password."', '')")) 
					{
	    				echo "������ (" . $mysqli->errno . ") " . $mysqli->error;
	    			}
	    			echo "<script>alert('����������� ������ �������')</script>";	
	    		}			
			}
			else
			{
				echo "<script>alert('".array_shift($errors)."')</script>";
			}		
		}

	?>
	
<html>

<body>



	<form method='post' action='signup.php'>
			<!--Вводим логин -->
    	<input type='text' name='login' placeholder="login"> 
    		<!--Вводим пароль -->
     	<input type='password' name='password' placeholder="password"> 
     	<input type='password' name='repeat_password' placeholder="repeat password"> 
    <input type='submit' name = 'signup'>
</form>
</body>
</html>
