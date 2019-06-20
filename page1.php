<?php 
session_start();
/*$mysqli = new mysqli('localhost', 'root', '', 'db');

/*if (!$mysqli->query("INSERT INTO users VALUES ('user2', 'pass2', 'read')")) {
    echo "? ???? ???? ???? (" . $mysqli->errno . ") " . $mysqli->error;
}*/
 

$link = mysqli_connect('localhost', 'root', '', 'db') 
    or die("??? " . mysqli_error($link));     
$link->set_charset('cp1251');


$group = $_SESSION['group'];
$discipline = $_SESSION['discipline'];


$query ="SELECT fio, marcs FROM information WHERE gruppa='".$group."' AND discipline = '".$discipline."'"; 
$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link)); 

if($result)
{
    $rows = mysqli_num_rows($result); 
     
    echo "<table><tr><th></th><th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 2 ; ++$j) 
                echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    
    mysqli_free_result($result);
}

mysqli_close($link);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="signin.php">Войти</a>
 </body>
 </html>
