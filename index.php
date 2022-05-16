<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav>
        <img id="slika" src="https://pbs.twimg.com/media/Ddna4X7UQAEQeBr.jpg:large"></img>
    </nav>


    <div class="main-div">

        <div class="unos-proizvoda-div">
            <div class="osobine-proizvoda">
                <label>Naziv: </label>
                <input type="text" class="form-control" id="naziv">
            </div>
            <div class="osobine-proizvoda">
                <label>Šifra: </label>
                <input type="text" class="form-control" id="sifra">
            </div>
            <div class="osobine-proizvoda">
                <label>Veličina: </label>
                <input type="text" class="form-control" id="velicina">
            </div>
            <div class="osobine-proizvoda">
                <label>Boja: </label>
                <input type="text" class="form-control" id="boja">
            </div>
            <div class="osobine-proizvoda">
                <label>Cena: </label>
                <input type="number" class="form-control" id="cena">
            </div>
            <div class="osobine-proizvoda">
                <label>Brend: </label>
                <select class="form-select" id="brend">
                    <?php
                    include('konekcija.php');

                    $sql1 = "select * from brend";
                    $result_set1 = $konekcija->query($sql1);

                    while ($brend = mysqli_fetch_array($result_set1)) {
                    ?>
                        <option value="<?php echo $brend['id']; ?>"><?php echo $brend['naziv']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <button class="btn btn-primary" id="btn_sacuvaj">Sačuvaj proizvod</button>
    </div>


    <div class="proizvodi-tbl-div">
        <table class="table table-bordered" id="proizvodi-tbl">

            <thead>
                <tr>
                    <th>Naziv</th>
                    <th>Šifra</th>
                    <th>Veličina</th>
                    <th>Boja</th>
                    <th>Cena</th>
                    <th>Brend</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php

                $sql = "select pzd.id as pid, pzd.naziv, pzd.sifra, pzd.velicina, pzd.boja, pzd.cena, b.naziv as bnaziv from proizvod pzd join brend b on pzd.brend_id=b.id";
                $result_set = $konekcija->query($sql);
                while ($proizvod = mysqli_fetch_array($result_set)) {
                ?>
                    <tr>
                        <td><?php echo $proizvod['naziv'];  ?></td>
                        <td><?php echo $proizvod['sifra'];  ?></td>
                        <td><?php echo $proizvod['velicina'];  ?></td>
                        <td><?php echo $proizvod['boja']; ?></td>
                        <td><?php echo $proizvod['cena']; ?></td>
                        <td><?php echo $proizvod['bnaziv']; ?></td>
                        <td style="width: 180px;">
                            <button id="btn_izmena" class="btn btn-success">Izmeni</button>
                            <button id="btn_brisanje" class="btn btn-danger">Obriši</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js.js"></script>
</body>

</html>