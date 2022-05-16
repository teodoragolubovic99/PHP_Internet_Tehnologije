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
                </select>
            </div>
        </div>

        <button class="btn btn-primary" id="btn_sacuvaj">Sačuvaj proizvod</button>
    </div>




</body>

</html>