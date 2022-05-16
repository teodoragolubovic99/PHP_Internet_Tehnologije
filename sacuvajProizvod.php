<?php

include('konekcija.php');
include('Proizvod.php');

$naziv = $_POST['PNaziv'];
$sifra = $_POST['PSifra'];
$velicina = $_POST['PVelicina'];
$boja = $_POST['PBoja'];
$cena = $_POST['PCena'];
$brend_id = $_POST['PBrend'];

$proizvod = new Proizvod();
$proizvod->sacuvajProizvod($naziv, $sifra, $velicina, $boja, $cena, $brend_id, $konekcija);
