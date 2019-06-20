<?php
require "db.php";
$data=$_POST;
if( isset($data['do_signup']))
{
    //регистрация
    
    $errors=array();
    if(trim($data['login']) =='')
    {
        $errors[]='Enter login!';
    }
    if(trim($data['password']) =='')
    {
        $errors[]='Enter password!';
    }
    if(trim($data['password2']) !=$data['password'])
    {
        $errors[]='Wrong repassword';
    }
  if   (empty($errors)){
      //cool
        $user=R::dispense('users');
        $user->login=$data['name'];
        $user->role=$data['role'];
        $user->password=$data['pass'];
        R::store($user);
        echo ' <div "style=color:green;">','reg complite','</div><hr>';
  }
  else{
      echo '<div "style=color:red;">',array_shift($errors),'</div><hr>';

  }
}

?>

<form action="/signup.php" method="_POST">
<p>
    <p><strong>Login</strong></p>
    <input type="text" name="login">
</p>
<p>
    <p><strong>Password</strong></p>
    <input type="password" name="password">
</p>
<p>
    <p><strong>Type password again</strong></p>
    <input type="password" name="password2">
</p>
<p>
    <p><strong>Type role</strong></p>
    <input type="role" name="role">
</p>
<p>
    <button type="submit">reg</button>
</p>
</form>