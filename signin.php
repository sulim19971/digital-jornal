<?php

		session_start();
		$link = mysqli_connect('localhost', 'root', '1234', 'gg') 
	    or die("??? " . mysqli_error($link));     
		$link->set_charset('cp1251');

		if(isset($_POST['signin']))
		{
			$errors = array();

			if(trim($_POST['login']) == '')
			{
				$errors[] = 'Введите логин!';
			}

			if($_POST['password'] == '')
			{
				$errors[] = 'Введите пароль!';
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
						header("Location: /signup.php"); //куда перенаправит при успешном входе админ
						$_SESSION['admin'] = "true";
					}
					else
						header("Location: /page2.php"); //куда перенаправит при успешном входе не админ
				}
				else
					echo "<script>alert('Неверный пароль!')</script>";
			}
			else
			{
				echo "<script>alert('".array_shift($errors)."')</script>";
			}		
		}

	?>
	

<html>

<body>
<link rel="stylesheet" href="./login.css">
<div class="gg" style="background:url(2.jpg)no-repeat transparent center top /cover  ">
        
        <div class="gg1" >
        	<img src="27.png" style="width: 200px;" class="icon">
	<form method='post' action='signin.php'>
			<!--??? ???-->
    	<input type='text' name='login' placeholder="login" class="field"> 
    		<!--??? ??? -->
     	<input type='password' name='password' placeholder="password" class="field"> <br>
    <input type='submit' name = 'signin' value="" class="btn">
</form>
</div>
</div>

</body>
</html>
