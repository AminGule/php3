<?php
/*
$servername = "localhost";
$db_username = "root";
$db_password = "";
$database_name = "teretana";

$conn = mysqli_conect($servername, $db_username, $db_password, $database_name);

if(conn) {
    echo "Uspjesna konekcija";
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo $_POST['username'] . "<br>";
    //echo $_POST['password'] . "<br>";

} else {
    echo "PODACI NISU POSLATI";
}




?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<form action = "" method = "post">
    Username: <input type = "text" name = "username"><br>
    Password: <input type = "password" name = "password"><br>
    <input type = "submit" value = "Login">
        
</form>

    



</body>
</html>

<?php

/*
    <?php

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            $email = $_POST['email'];
            $date = $_POST['date'];

            $today = date("Y-m-d");
            $today = date_create($today);

            $converted_date = date_create($date);

            //var_dump($today);

            $diff = date_diff($date, $today);
            
            $diff = $diff->y;

            if($diff >= 18) {
                $data = "Ime: $first_name,
                Prezime: $last_name,
                Email: $email,
                Datum rodjenja: $date";

                $file = fopen($first_name . ".txt", "w");

                fwrite($file, $data);

                fclose($file);

                echo "Uspjesno ste poslali poruku";
            }   else {
                echo "Morate imati 18 godina da bi ste poslali poruku";
            }       







            //var_dump ($diff ->y);



            //echo $today;
            //echo $date;

            $data = "Ime: $first_name,
                     Prezime: $last_name,
                     Email: $email,
                     Datum rodjenja: $date";
            //echo $data;

            $file = fopen($first_name . ".txt", "w");

            fwrite($file, $data);

            fclose($file);
        }

        ?>
*/

/*
  
    <?php
    $selectBrand = '';

    if(isset($_POST['brand'])) {
        $selectBrand = $_POST['brand'];
    }
    ?>

    <form method = "POST">
        <select name = "brand">
            <option value = "ALL" <?php echo ($_POST['brand'] ?? '' ) === 'ALL' ? 'selected' : ''; ?>>Sve</option>
            <option value = "BMW" <?php echo ($_POST['brand'] ?? '' ) === 'BMW' ? 'selected' : ''; ?>>BMW</option>
            <option value = "Audi" <?php echo ($_POST['brand'] ?? '' ) === 'Audi' ? 'selected' : ''; ?>>Audi</option>
            <option value = "Mercedes" <?php echo ($_POST['brand'] ?? '' ) === 'Mercedes' ? 'selected' : ''; ?>>Mercedes</option>
        </select>  
         
        <button type = "submit">Pretrazi</button>
    </form>

    
    <?php



//$selectBrand = $_GET['brand'];

//echo $selectBrand;

$cars = [
    'BMW' => ['Serija 3', 'Serija 5', 'X3', 'X5'],
    'Audi' => ['A4', 'A6' , 'Q5' , 'Q7'],
    'Mercedes' => ['C-Class', 'E-Class', 'GLC', 'GLE']

];

foreach ($cars as $brand => $models) {
         if($selectBrand === $brand || $selectBrand === 'ALL') {
            echo "<h2>$brand</h2>";

            foreach($models as $model) {
                 echo "<p>$model</p>";
            }

    }
 
    //var_dump($brand); echo "<br><hr>";
}
?>
*/




/*
            <?php
            if(isset($_GET['brand'])) {
                if($_GET['brand'] === 'BMW') {
                    echo 'selected';
                } 
            }
             ?>
                         <?php
            if(isset($_GET['brand'])) {
                if($_GET['brand'] === 'BMW') {
                    echo 'selected';
                } 
            }
             ?>
                         <?php
            if(isset($_GET['brand'])) {
                if($_GET['brand'] === 'BMW') {
                    echo 'selected';
                } 
            }
             ?>
                         <?php
            if(isset($_GET['brand'])) {
                if($_GET['brand'] === 'BMW') {
                    echo 'selected';
                } 
            }
             ?>
*/
//echo "hello woeld!";

//print_r("hello world!");

/*
$bilosta = 5;

echo $bilosta . "<br>";

$bilosta = 10;

echo $bilosta;
*/
/*
$text = "hello world!";
//$test = "nesto drugo";
$cijeli_broj = 11;
$float_broj = 5.14;
$tacno_netacno = true;
$prazno = null;

//echo $test;

var_dump($text);

echo "<br>";

var_dump($cijeli_broj);

echo "<br>";

var_dump($float_broj);

echo "<br>";

var_dump($tacno_netacno);

echo "<br>";

var_dump($prazno);
*/
/*
$text = "hello world!";
$cijeli_broj = 11;
$float_broj = 5.14;
$tacno_netacno = true;
$prazno = null;

$loPta = "okrugla";
$lopta = "ssss";

var_dump($lopta);

var_dump($loPta);
*/
/*
$broj_1 = 11;
$broj_2 = 5;

$rezultat = $broj_1 - $broj_2;

echo "broj 1: " . $broj_1;

echo "<br>";

echo "broj 2: " . $broj_2…
<?php

//echo "hello woeld!";

//print_r("hello world!");

/*
$bilosta = 5;

echo $bilosta . "<br>";

$bilosta = 10;

echo $bilosta;


//echo $test;

var_dump($text);
 n
echo "<br>";

var_dump($cijeli_broj);

echo "<br>";

var_dump($float_broj);

echo "<br>";

var_dump($tacno_netacno);

echo "<br>";

var_dump($prazno);
*/
/*
$text = "hello world!";
$cijeli_broj = 11;
$float_broj = 5.14;
$tacno_netacno = true;
$prazno = null;

$loPta = "okrugla";
$lopta = "ssss";

var_dump($lopta);

var_dump($loPta);
*/
/*
$broj_1 = 11;
$broj_2 = 5;

$rezultat = $broj_1 - $broj_2;

echo "broj 1: " . $broj_1;

echo "<br>";

echo "broj 2: " . $broj_2;

echo "<br>";

echo "rezultat: " . $rezultat;

//echo "$broj_1  minus $broj_2 , jednako je:  <h1>$rezultat</h1>";

$text1 = "hello";
$text2 = "world";

// ovaj kod sluzi za spajanje dva teksta
$spoj = $text1 . $text2;

$nova_var = $spoj . "<span style='color:red'>text neki</span>" . $broj_1;

echo $nova_var;

echo "<br>";

echo "<div style='background: red'>$broj_1</div>";
*/
/*
$tekst = "hello world";

echo $tekst;

echo "<br>";

$duzina = strlen($tekst);

echo "duzina stringa: " . $duzina;

echo "<br>";

$pozicija = strpos($tekst, "world");

var_dump($pozocija);

echo $pozicija;
*/
/*
$tekst = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita impedit laborum officiis. Nisi aut sunt itaque similique, nulla totam repudiandae laudantium inventore odit? Velit, molestiae officia quam dolorem a cumque?"

$omg_pos = strpos($tekst, "omg");
$lol_pos = strpos($tekst, "lol");

//echo $omg_pos;

$finish_pos = $lol_pos - $omg_pos;

echo "omg pozicija: $omg_pos <br>";
echo "lol pozicija: $lol_pos <br>";
echo "razlika lol minus omg: $finish_pos<br>";


$preview = substr($tekst, $omg_pos, $lol_pos);

echo $preview . "... ";
*/
/*
$tekst = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita impedit laborum officiis. Nisi aut sunt itaque similique, nulla totam repudiandae laudantium inventore odit? Velit, molestiae officia quam dolorem a cumque?"

echo $tekst . "<br><br>";

//echo $preview . "... ";

$preciscen_tekst = str_replace("omg", "", $tekst);
$preciscen_tekst = str_replace("lol", "", $preciseon_tekst);

echo $preciscen_tekst;
*/
/*
$tekst = "ovo je trol neki";

$mala_slova = strtlower($tekst);

echo $mala_slova;
*/
/*
$email = "ovo je neki.com";

//$sadrzi = str_contains($email, "@");

$novi = trim($email);

var_dump($email);
*/
/*
$broj = 9;

if($broj != 10) {
    echo "broj je veci od 10";
} elseif($broj == 9){
    echo "broj je tacno 9";
} else {
    echo "bilo sta";
}
*/
/*
$broj1 = 5;
$broj2 = 5;

if($broj1 == $broj2) {
    echo "brojevi su jednaki";
} else {
    echo "brojevi nisu jednaki ";
}
*/
/*
$broj = 30;

if($broj >= 10 && $broj <= 50){
    echo "broj je izmedju 10 i 50";
} else {
    echo "broj nije izmedju 10 i 50";
}
*/
/*
$broj = -5;

/
if($broj < 0 OR $broj > 100){
    echo "broj je manji od 0 ili je veci od 100";
}
/

if ($broj > 10 && $broj < 20 || $broj > 40 && $broj < 50){
    echo "broj je izmedju 10 i 20 ili broj je izmedju 40 i 50";
}
*/
/*
$ime = "marko";
$godine = 25;
$zanimanje = "programer";

if($ime == "marko" && $godine >= 18 && $zanimanje == "programer"){
    echo "marko je punoljetni programer";
}
*/
/*
$broj = 5;

$parnost = ($broj > 0) ? "broj je veci od 0" : "broj je nije veci od 0";

echo $parnost;

/
if($broj % 2 == 0) {
    echo "broj je paran";
} else {
    echo "broj je neparan";
}
/
*/
?>
