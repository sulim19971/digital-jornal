<?php 
/*$mysqli = new mysqli('localhost', 'root', '', 'db');



/*if (!$mysqli->query("INSERT INTO users VALUES ('user2', 'pass2', 'read')")) {
    echo "? ???? ???? ???? (" . $mysqli->errno . ") " . $mysqli->error;
}*/

$link = mysqli_connect('localhost', 'root', '', 'bd') 

    or die("??? " . mysqli_error($link)); 
    mysql_set_charset("CP1251");
$query ="SELECT * FROM inf";
 
$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link)); 
if($result)
{
       $rows = mysqli_num_rows($result); 
     
    echo "<table><tr><th></th><th></th><th></th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    
    mysqli_free_result($result);
}
 
mysqli_close($link);
 ?>