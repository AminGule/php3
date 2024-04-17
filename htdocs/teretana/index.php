<?php

//$servername = "localhost";
//$db_username = "root";
//$db_password = "";
//$database_name = "teretana";

//$conn = mysqli_connect($servername, $db_username, $db_password, $database_name);

//if(!$conn) {
    //die("Neuspjesna konekcija");
//}

session_start();

require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql - "SELECT admin_id, password FROM admins WHERE username = ?";

    $run = $conn ->prepare($sql);
    $run->bind_param("ss", $username);
    $run->execute();

    $results = $run->get_results();

    if($results->num_rows == 1) {

        $admin = $result->fetch_assoc();

        if(password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['admin_id'];
            header('location: admin_dashboard.php');
        }  else {
            $_SESSION['error'] = "Netacan password"
            header('location: index.php'); 
            exit;
        }
        
    }  else {
        $_SESSION['error'] = "Netacan username";
        header('location: index.php');
        exit;
    }

    //var_dump($results);

    //echo $_POST['username'] . "<br>";
    //echo $_POST['password'] . "<br>";

} 

?>


<!DOCTYPE html>
<html >
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCap5moO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/dropzoneg@5/dist/min/dropzone.min.css" type="text/css" />
</head>
<body>
    <form action = "" method = "POST">
        Username: <input type = "text" name = "username"><br>
        Password: <input type = "password" name = "password"><br>
        <input type = "submit" value = "Login" >
    </form>
</body>
</html>

<?php

if(isset($_SESSION['error'])) {
    echo $_SESSION['error'] . "<br>";
    
    unset($_SESSION['error']);

}

?>