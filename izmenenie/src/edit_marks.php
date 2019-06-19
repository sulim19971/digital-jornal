<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'jornal')
    or die("???" . mysqli_error($link));
$link->set_charset('cp1251');

$mark1 = $_GET['mark1'];
$fio = $_GET['name'];
$subj = $_GET['subj'];

$sql = ("SELECT marcs FROM information WHERE fio='" . $fio . "' AND discipline='" . $subj . "' ");
$result = mysqli_query($link, $sql);
$arr = mysqli_fetch_assoc($result);

$arr['marcs'] .= $mark1;
$mark1 = $arr['marcs'];

$query = "UPDATE information  SET marcs='" . $mark1 . "' WHERE fio='" . $fio . "' AND discipline='" . $subj . "' ";
if (mysqli_query($link, $query)) {
    header("refresh:1; url=index.php");
} else {
    echo "Error updating record:";
}
mysqli_close($link);