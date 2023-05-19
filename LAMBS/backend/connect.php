<?php
header('Content-Type: text/html; charset=utf-8');

//palvelin
$palvelin = "localhost";
//tietokanta
$tietokanta = "lambs_database";
//käyttäjätunnus
$tunnus = "root";
//salasana
$salasana = "";

$yhteys = new PDO("mysql:host=$palvelin;dbname=$tietokanta", $tunnus, $salasana);
$yhteys -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Onnistui";



    //testataan yhteys

    if($yhteys == true){
    //echo "Toimii hyvin!";
}else{
    //echo "Ei toimi";
}

try{
    //palvelin
    $palvelin = "localhost";
    //tietokanta
    $tietokanta = "lambs_database";
    //käyttäjätunnus
    $tunnus = "root";
    //salasana
    $salasana = "";

    $yhteys = new PDO("mysql:host=$palvelin;dbname=$tietokanta", $tunnus, $salasana);
    $yhteys -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Onnistui";
}
catch(PDOException $e){
    echo "Virhe on " . $e -> getMessage();
}


?>