<?php
require "db.php";
$data=$_POST;
if( isset($data['do_signup']))
{
    //регистрация
    
    // $errors=array();
    // if(trim($data['login']) =='')
    // {
    //     $errors[]='Enter login!';
    // }
    // if(trim($data['password']) =='')
    // {
    //     $errors[]='Enter password!';
    // }
    // if(trim($data['password2']) !=$data['password'])
    // {
    //     $errors[]='Wrong repassword';
    // }
//   if   (empty($errors)){
      //cool
// $post = R::dispense( 'post' );
//     $post->title = 'fck';
//     $id = R::store( $post );
        $user=R::dispense('user');
        $user->name=$data['name'];
        $user->role=$data['role'];
        $user->pass=$data['pass'];
        R::store($user);
        $user2 = R::find('user', 'role=a');
        echo $user2;
     
    echo "<table><tr><th></th><th></th><th></th></tr>";
    for ($i = 0 ; $i < 6 ; ++$i)
    {
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) 
                echo "<td>$user2[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

        // echo ' <div "style=color:green;">','reg complite','</div><hr>';       
        // }
//   else{
//       echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
//   }
}
?>

<form action="/signup.php" method="POST">
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
<!-- <p>
    <p><strong>Type password again</strong></p>
    <input type="password" name="password2" value="<php? echo @$data['password2']; ?>">
</p> -->

<p>
    <button type="submit" name="do_signup">reg</button>
</p>
</form>