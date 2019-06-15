<?
session_start();

// header('Location: http://localhost:80/');

// $login = $_POST['login'];
// $password = hash_hmac('sha256', md5($_POST['pass']), '9c664c119a68c5154bccbf1ee348a205');
$host="YOUR_DB_HOST";
$dbname="YOUR_DB_NAME";
$user="YOUR_DB_USER";
$pass="YOUR_DB_PASSWORD";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  
}  
catch(PDOException $e) {  
    echo $e->getMessage();  
}

$date = date('Y-m-d');

$res = $db->prepare('SELECT `users` . * ,  `weeks`.`week_id` FROM `users` LEFT JOIN  `weeks` ON  `weeks`.`date` =  :d WHERE `login` = :l');
$res->execute(array(':d' => $date, ':l' => $login));
while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    //echo $password."/".$row['password'];
    if($row['password']==$password) {
        //страница добавления оценок
        echo $_SESSION['role'];
    } else {
        echo "0";
    }
}
?>