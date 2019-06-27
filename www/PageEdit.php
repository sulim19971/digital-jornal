<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="st.css">
    <title>Document</title>
</head>

<body>



    <form action="page2.php">
        <?php
        $link = mysqli_connect('localhost', 'root', '', 'db')
            or die("??? " . mysqli_error($link));
        $link->set_charset('cp1251');



        $group = $_SESSION['group'];
        $discipline = $_SESSION['discipline'];


        echo "<input type='text' class='inf' name='group' value='$group' readonly>";
        echo "</br>";
        echo "<input type='text' class='inf' name='discipline' value='$discipline' readonly>";

        $query = "SELECT fio, marcs FROM information WHERE gruppa='" . $group . "' AND discipline = '" . $discipline . "'";
        $result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
        if ($result) {
            $rows = mysqli_num_rows($result);
            echo "<table><tr><th>ФИО</th><th>Оценки</th></tr>";
            for ($i = 0; $i < $rows; ++$i) {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for ($j = 0; $j < 2; ++$j) {
                    if ($j == 1)
                        echo  "<td ><input type='text'  class='input-td' name='m$i' value='$row[$j]' autocomplete='off' ></td>";
                    else
                        echo "<td ><input type='text'  class='input-td'  name='n$i' value='$row[$j]' readonly></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<input type='submit' value='Сохранить' class='ok-btn' >";
            echo "<input type='hidden' name='num_rows' value='$rows'>";

            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>

    </form>



</body>

</html>