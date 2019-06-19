<?php 

$link = mysqli_connect('127.0.0.1', 'root', '', 'jornal') 
    or die("???" . mysqli_error($link));     

$link->set_charset('cp1251');
//вытаскиваем введенные группу и предмет
// $group = $_GET['group'];
// $discipline = $_GET['discipline'];

$query =("SELECT fio, marcs FROM information"); 
$result = mysqli_query($link, $query) or die("??? " . mysqli_error($link)); 

if($result)
{
    $rows = mysqli_num_rows($result); 
     
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

    mysqli_free_result($result);
}
mysqli_close($link);
