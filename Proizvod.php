<?php

class Proizvod
{
    public $id;
    public $naziv;
    public $sifra;
    public $velicina;
    public $boja;
    public $cena;
    public $brend_id;

    public function sacuvajProizvod($naziv, $sifra, $velicina, $boja, $cena, $brend_id, $konekcija)
    {
        $sql = "insert into proizvod values (NULL, '$naziv', '$sifra', '$velicina', '$boja', '$cena', '$brend_id')";
        $konekcija->query($sql);
    }
}
