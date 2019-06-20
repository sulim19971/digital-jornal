<!DOCTYPE php>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Edit marks</title>

</head>

<body>

    <form action='edit_marks.php' method='update'>
        <div class="form-add-marks">
            <h1>Edit marks</h1>
            <div class="choice">
                <input type="input" name="name" placeholder="FIO">
                <input type="input" name="subj" placeholder="Subject">
            </div>
            <div class="block-marks-button">

                <div class="keyboard">
                    <form>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='1 ';">1</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='2 ';">2</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='3 ';">3</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='4 ';">4</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='5 ';">5</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='6 ';">6</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='7 ';">7</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='8 ';">8</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='9 ';">9</button>
                        <button type="button" value="ЖМИ" onclick="document.getElementById('pole').value+='10 ';">10</button>
                        <button type="button" value="ЖМИ" title="A student received a comment for bad behavior." onclick="document.getElementById('pole').value+='n ';">n</button>
                        <button type="button" value="ЖМИ" title="A student received a comment for bad behavior." onclick="document.getElementById('pole').value+='! ';">!</button>
                        <button type="button" value="ЖМИ" title="A student is exempted from attending classes." onclick="document.getElementById('pole').value+='o ';">o</button>
                    </form>
                </div>

                <div class="f-f-block">
                    <input id="pole" type="text" name="mark1" placeholder="Marks" readonly>
                    <br>
                    <div class="posl1">
                        <button id="btn-reset" type="button" value="ЖМИ" onclick="document.getElementById('pole').value='';">delete</button>
                    </div>
                </div>
            </div>

            <input id="sub-mit" input id=" sub-mit " type="image" src="img/ok.svg" class="btn-ok" name="update" value="ok">

        </div>
        </div>
    </form>

    <div class="marks-space">
        <?php

        $link = mysqli_connect('localhost', 'root', '', 'bd') or die("???" . mysqli_error($link));

        $link->set_charset('cp1251');

        $query = "SELECT gruppa, fio, discipline, marcs FROM information";

        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if ($result) {
            $rows = mysqli_num_rows($result); 

            echo "<table> <tr> <th>Group</th> <th>FIO</th> <th>Discipline</th> <th>Marks</th> </tr>";
            for ($i = 0; $i < $rows; ++$i) {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for ($j = 0; $j < 4; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_free_result($result);
        }
        mysqli_close($link);
        ?>

    </div>

</body>

</html>