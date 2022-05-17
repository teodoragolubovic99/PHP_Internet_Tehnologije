<?php

include('konekcija.php');
include('Proizvod.php');

$proizvod = new Proizvod();

$id = $_POST['PID'];
$naziv = $_POST['PNaziv'];
$sifra = $_POST['PSifra'];
$velicina = $_POST['PVelicina'];
$boja = $_POST['PBoja'];
$cena = $_POST['PCena'];
$brend_id = $_POST['PBrend'];

$proizvod->izmeniProizvod($id, $naziv, $sifra, $velicina, $boja, $cena, $brend_id, $konekcija);
