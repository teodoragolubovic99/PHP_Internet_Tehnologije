 <?php

    include('konekcija.php');
    include('Proizvod.php');

    $ID = $_POST['PID'];
    $sql = "select * from proizvod where id=" . $ID;
    $result_set = $konekcija->query($sql);

    $proizvod = new Proizvod();

    while ($p = mysqli_fetch_array($result_set)) {

        $proizvod->id = $p['id'];
        $proizvod->naziv = $p['naziv'];
        $proizvod->sifra = $p['sifra'];
        $proizvod->velicina = $p['velicina'];
        $proizvod->boja = $p['boja'];
        $proizvod->cena = $p['cena'];
        $proizvod->brend_id = $p['brend_id'];
    }

    echo json_encode($proizvod);
