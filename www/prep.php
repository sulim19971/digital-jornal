<?php
session_start();

if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
{
	header("Location: /index.php"); 
}

$link = mysqli_connect('localhost', 'root', '', 'db')
	or die("??? " . mysqli_error($link));
$link->set_charset('cp1251');

if (isset($_POST['rem_prep'])) 
{
	$errors = array();

	if (trim($_POST['login']) == '') {
		$errors[] = '������� �����';
	}

	if (empty($errors)) 
	{
		$login = $_POST['login'];

		$query = "SELECT login FROM users WHERE login='".$login."'"; 
		$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
		if($result)
	    	$disc = mysqli_fetch_row($result);
		if(isset($disc))
		{
			$query = "DELETE FROM users WHERE login='" . $login . "'";

    		$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));		
    		echo "<script>alert('������������� ������!')</script>";
	    }	    	
	    else
	    	echo "<script>alert('������ ������������� ���')</script>";
		
	}	
	else 
	{
		echo "<script>alert('" . array_shift($errors) . "')</script>";
	}
}



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

		if(isset($_POST['signup_admin']))
		{
			$errors = array();

			if(trim($_POST['login_admin']) == '')
			{
				$errors[] = '������� �����';
			}

			if($_POST['password_admin'] == '')
			{
				$errors[] = '������� ������!';
			}
			if($_POST['password_admin'] != $_POST['repeat_password_admin'])
			{
				$errors[] = '������ �� ���������';
			}
			
			if(empty($errors))
			{
				$login = $_POST['login_admin'];
				$password = $_POST['password_admin'];

				
				$query = "SELECT login FROM users WHERE login='".$login."'"; 
				$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
				if($result)
	    			$pass = mysqli_fetch_row($result);
				if(isset($pass))
	    			echo "<script>alert('����� �����')</script>";
	    		else
	    		{
					if (!$link->query("INSERT INTO users VALUES ('".$login."', '".$password."', 'admin')")) 
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
			<p>����������� �������������</p>
			<form method='post' action='prep.php'>
					<!--Вводим логин -->
		    	<input type='text' name='login' placeholder="login"> 
		    		<!--Вводим пароль -->
		     	<input type='password' name='password' placeholder="password"> 
		     	<input type='password' name='repeat_password' placeholder="repeat password"> 
		    	<input type='submit' name = 'signup' value="����������������">
			</form>
			<p>����������� ��������������</p>
			<form method='post' action='prep.php'>
					<!--Вводим логин -->
		    	<input type='text' name='login_admin' placeholder="login"> 
		    		<!--Вводим пароль -->
		     	<input type='password' name='password_admin' placeholder="password"> 
		     	<input type='password' name='repeat_password_admin' placeholder="repeat password"> 
		    	<input type='submit' name = 'signup_admin' value="����������������">
			</form>
			<p>�������� ������������</p>
			<form method='post' action='prep.php'>
				<!--??? ???-->
				<input type='text' name='login' placeholder="login">
				<input type='submit' name='rem_prep' value="�������" class="btn">
			</form>

</body>

</html>