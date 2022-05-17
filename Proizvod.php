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


    public function izmeniProizvod($id, $naziv, $sifra, $velicina, $boja, $cena, $brend_id, $konekcija)
    {
        $sql = "update proizvod set naziv='" . $naziv . "', sifra='" . $sifra . "', velicina='" . $velicina . "', boja='" . $boja . "', cena='" . $cena . "', brend_id='" . $brend_id . "' where id=" . $id;
        $konekcija->query($sql);
    }
}
