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
				$errors[] = '������� �����!';
			}

			if($_POST['password'] == '')
			{
				$errors[] = '������� ������!';
			}
			if(empty($errors))
			{
				$login = $_POST['login'];
				$password = $_POST['password'];

			
				$query = "SELECT password, access FROM users WHERE login='".$login."'"; 
				$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));

				if($result)
	    			$pass = mysqli_fetch_row($result);
	    		if($password == $pass[0])
				{
					$_SESSION['login'] = $login;
					if($pass[1] == "admin")
					{
						header("Location: /signup.php"); //���� ������������ ��� �������� ����� �����
						$_SESSION['admin'] = "true";
					}
					else
						header("Location: /page2.php"); //���� ������������ ��� �������� ����� �� �����
				}
				else
					echo "<script>alert('�������� ������!')</script>";
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
