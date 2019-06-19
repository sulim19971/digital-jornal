<?php
require "db.php";
$data=$_POST;
if(isset($data['do_login']))
{
    $errors = array();
    $user = R::find('user', 'name=?', array($data['name']));
    if ($user)
    {
        //существует логин
        if(password_verify($data['pass'],$user->pass)){
            echo 'pass';
        }
        echo 'test';

    }
    else{
        $errors[]='no user found';
    }
}
?>
<form action="/login.php" method="POST">
<p>
    <p><strong>Login</strong></p>   
    <input type="text" name="name">
</p>
<p>
    <p><strong>Type role</strong></p>
    <input type="text" name="role">
</p>
<p>
    <p><strong>Password</strong></p>
    <input type="password" name="pass">
</p>
<p>
    <button type="submit" name="do_login">login</button>
</p>
</form>