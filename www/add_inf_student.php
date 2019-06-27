<?php
session_start();
if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
    {
        header("Location: /index.php"); 
    }
$link = mysqli_connect('localhost', 'root', '', 'db')
    or die("??? " . mysqli_error($link));
$link->set_charset('cp1251');
if (trim($_POST['name_group']) == '') {

    header("Refresh:0; url=group.php");
    echo "<script>alert('¬ведите группу!')</script>";
} else {
    $group = $_POST['name_group'];
    $rows = $_SESSION['rows'];

    for ($i = 0; $i < 30; $i++) {
        $name = 'name' . $i;
        settype($name, "string");
        $name_student = $_POST[$name];
        if (!empty($name_student)) {

            for ($j = 0; $j < $rows; $j++) {
                $check = $j;
                settype($check, "string");
                $checkbox = $_POST[$check];
                $check1 = (isset($_REQUEST[$check])) ? 1 : 0;
                if ($check1 == 1) {
                    $query = "INSERT INTO information (gruppa, fio, discipline) VALUES ('" . $group . "', '" . $name_student . "', '" . $checkbox . "' )";
                    $result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
                    $check1 = 0;
                }
                // if (mysqli_query($link, $query)) {

                // } else {
                //     echo "Error adding record:";
                //     echo " <br/>";
                // }

            }
        }
    }
    header("Refresh:0; url=group.php");
    mysqli_close($link);
}
