<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "klienci";

$imie = $_POST["imie"];
$adres = $_POST["adres"];
$telefon = $_POST["telefon"];

$marka = $_POST["marka"];
$pojemnosc = $_POST["pojemnosc"];
$rejestracja = $_POST["rejestracja"];
$przebieg = $_POST["przebieg"];

$data = $_POST["data"];
$drive = $_POST["drive"];
$wgniecenie = $_POST["wgniecenie"];


$us1 = $_POST["us1"];
$us2 = $_POST["us2"];
$us3 = $_POST["us3"];
$us4 = $_POST["us4"];
$us5 = $_POST["us5"];
$us6 = $_POST["us6"];
$us7 = $_POST["us7"];

print_r($_POST["drive"])

$link = @mysqli_connect($servername, $username, $password, $database);
if (!$link) {
    echo "Blad: ". mysqli_connect_error();
}
else {
    echo "Polaczenie ok!";
}
echo "<br>";
$query = "INSERT INTO dane(id,imie i nazwisko,adres zamieszkania,nr telefonu,marka pojazdu,pojemnosc silnika,numer rejestracyjny,przebieg (km),termin odbioru,Zgoda na jazde probna,Czy samochod jest wgniecony,Wymiana klocków hamulcowych,Przegląd samochodu,Wymiana oleju,Malowanie samochodu,Wymiana opon,usuwanie wgniecen w karoserii,ustawianie zbierznosci) VALUES($imie,$adres,$telefon,$marka,$pojemnosc,$rejestracja,$przebieg,$data,$drive,$wgniecenie,$us1,$us2,$us3,$us4,$us5,$us6,$us7)";
$result = mysqli_query($link, $query);
echo $wynik = mysqli_num_rows($result);
echo "<br>";
$wynik = mysqli_fetch_assoc($result);
print_r($wynik);
while ($wynik=mysqli_fetch_assoc($result)) {
    print_r($wynik);
    echo "<br>";
}

?>