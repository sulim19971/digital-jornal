<?php
session_start();

if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
    {
        header("Location: /index.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="post" action="add_inf_student.php">

        <div class="group">
            <p>Группа</p>
            <input type="text" name="name_group" placeholder="введите группу">
        </div>

        <div class="students">
            <p>Ввод студентов</p>
            <?php
            for ($i = 0; $i < 30; ++$i) {
                echo "<input type='text' name='name$i' placeholder='ФИО'> <br>";
            }
            ?>
        </div>

        <div class="subjects">
            <p>Предметы</p>
            <?php
            $link = mysqli_connect('localhost', 'root', '', 'db')
                or die("??? " . mysqli_error($link));
            $link->set_charset('cp1251');

            

            $query = "SELECT * FROM disipline";
            $result = mysqli_query($link, $query) or die("??? " . mysqli_error($link));
            if ($result) {
                $rows = mysqli_num_rows($result);
                $_SESSION['rows'] = $rows;
                echo "<table><tr><th>Дисциплина</th></tr>";
                for ($i = 0; $i < $rows; ++$i) {
                    $row = mysqli_fetch_row($result);
                    echo "<tr>";
                    for ($j = 0; $j < 1; ++$j) {
                        echo  "<td >
                        <label><input type='checkbox' name='$i' value='$row[$j]'>$row[$j]</label></td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "<input type='submit' value='Добавить' class='ok-btn' >";
                mysqli_free_result($result);
            }
            mysqli_close($link);
            ?>
        </div>
    </form>

</body>

</html>