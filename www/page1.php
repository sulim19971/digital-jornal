<?php 
session_start();
/*$mysqli = new mysqli('localhost', 'root', '1234', 'gg');

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
//     <style type="text/css" media="all">
// @import url("css/page1.css");
// </style>

    // echo "<div class="table-wrapper">"
    // echo "<table class="fl-table" >"
    echo "<table><tr><th></th><th></th><th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) 
                echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    // echo "</table></div>";
    // echo "</div>"
     
    
    mysqli_free_result($result);
}

mysqli_close($link);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 	<title>dsd</title>
 </head>
 <body style="background:url(2.jpg)no-repeat transparent center top /cover  ">
                <div  >
 	<button class="btn btn-info" style="margin: 1rem 1rem "><a style="color:white"href="signin.php">login</a></button>
 </body>
 </html>
