<?php
$link = mysqli_connect('localhost', 'root', '', 'db')
    or die("??? " . mysqli_error($link));
$link->set_charset('UTF-8');

$rows=$_GET['num_rows'];
for ($i = 0; $i < $rows; ++$i) {
    $n = 'n' . $i;
    settype($name, "string");
    $m = 'm' . $i;
    settype($name, "string");

    // echo " " . $n;
    // echo " " . $m;
    // echo " " . $_GET['group'];
    // echo " " . $_GET['discipline'];

    $name = $_GET[$n];
    $mark = $_GET[$m];
    $group = $_GET['group'];
    $discipline = $_GET['discipline'];

    $query = "UPDATE information  SET marcs='" . $mark . "' WHERE fio='" . $name . "' AND discipline='" . $discipline . "' AND gruppa='" . $group . "'";
    $result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
    //-----------------------------------

    if (mysqli_query($link, $query)) {
        // header("url=page1.php");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Error updating record:";
        echo " <br/>";
    }
}

mysqli_close($link);