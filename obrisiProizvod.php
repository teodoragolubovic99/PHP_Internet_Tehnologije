<?php

include('konekcija.php');

$ID = $_POST['PID'];
$sql = "delete from proizvod where id=" . $ID;
$konekcija->query($sql);
