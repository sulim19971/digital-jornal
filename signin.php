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
	    		if( password_verify($password, $pass[0]))
				{
					$_SESSION['login'] = $login;
					
					header("Location: signup.php"); //перенаправление при успешной авторизации
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
	 <link rel="stylesheet" href="login.css">
<style>

</style>
<body>
	<div class="gg" style="background:url(2.jpg)no-repeat transparent center top /cover  ">
        
        <div class="gg1" >
            <img src="27.png" style="width: 200px;" class="icon">
            <form  action="signin.php" method="post" class="form">
                <input type='text' name='login' placeholder="login" class="field" ><br>
                <input type='password' name='password' placeholder="password" class="field" ><br>
                <input type="submit" name = 'signin' value="" class="btn">
            </form>
        </div>
    </div>
    </div>
</body>
</html>
