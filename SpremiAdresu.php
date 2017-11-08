<?php
    $ime = $_GET['ime'];
    $adresa = $_GET['adresa'];
    $grad = $_GET['grad'];

    if(isset($_GET['spol'])){
        if($_GET['spol'] == "x"){
            $spol = "muško";
        }else{
            $spol = "žensko";
        }
    }else{
        $spol = '';
    };

    if (isset($_GET['prijatelj'])){
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