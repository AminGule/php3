<?php



require_once 'config.php';

$username = 'ivan';
$password = 'sifra123';

echo $password . "<br>";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo $hashed_password . "<br>";

$sql = "INSERT INTO admins (username, password) VALUES (?, ?)";

$run = $conn->prepare($sql);
$run->blind_param("ss", $username, $hashed_password);
$run->execute();




/*
$servername = "localhost";
$db_username = "root";
$db_password = "";
$database_name = "teretana";

$conn = mysqli_connect($servername, $db_username, $db_password, $database_name);

if(!$conn) {
    die("Neuspjesna konekcija");
}
*/
?>