<?php
$ime = $_POST['ime'];
$adresa = $_POST['adresa'];
$grad = $_POST['grad'];

if(isset($_POST['spol'])){
    if($_POST['spol'] == "x"){
        $spol = "muško";
    }else{
        $spol = "žensko";
    }
}else{
    $spol = '';
};

if (isset($_POST['prijatelj'])){
    $prijatelj = 'da';
}else{
    $prijatelj = 'ne';
};

echo "Ime:$ime<br>";
echo "Adresa:$adresa<br>";
echo "Grad:$grad<br>";
echo "Spol:$spol<br>";
echo "Prijatelj:$prijatelj<br>";
?>