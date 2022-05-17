$(function () {
    sacuvajProizvod();
    vratiPodatkeZaProizvod();
    izmeniProizvod();
    obrisiProizvod();
    sort();
});


function sacuvajProizvod() {

    $(document).on('click', '#btn_sacuvaj', function () {

        var naziv = $('#naziv').val();
        var sifra = $('#sifra').val();
        var velicina = $('#velicina').val();
        var boja = $('#boja').val();
        var cena = $('#cena').val();
        var brend_id = $('#brend').val();

        $.ajax({
            url: 'sacuvajProizvod.php',
            method: 'post',
            data: { PNaziv: naziv, PSifra: sifra, PVelicina: velicina, PBoja: boja, PCena: cena, PBrend: brend_id },
        })
    })

}



function vratiPodatkeZaProizvod() {

    $(document).on('click', '#btn_izmena', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'vratiPodatke.php',
            method: 'post',
            data: { PID: id },
            dataType: 'json',

            success: function (data) {
                $('#idProizvoda').val(data.id);
                $('#naziv').val(data.naziv);
                $('#sifra').val(data.sifra);
                $('#velicina').val(data.velicina);
                $('#boja').val(data.boja);
                $('#cena').val(data.cena);
                $('#brend').val(data.brend_id);
            }
        })
    })
}


function izmeniProizvod() {

    $(document).on('click', '#btn_sacuvaj_izmene', function () {

        var id = $('#idProizvoda').val();
        var naziv = $('#naziv').val();
        var sifra = $('#sifra').val();
        var velicina = $('#velicina').val();
        var boja = $('#boja').val();
        var cena = $('#cena').val();
        var brend = $('#brend').val();

        $.ajax({
            url: 'izmeniProizvod.php',
            method: 'post',
            data: { PID: id, PNaziv: naziv, PSifra: sifra, PVelicina: velicina, PBoja: boja, PCena: cena, PBrend: brend },
        })

    })
}


function obrisiProizvod() {

    $(document).on('click', '#btn_brisanje', function () {

        var id = $(this).attr('value');

        $.ajax({
            url: 'obrisiProizvod.php',
            method: 'post',
            data: { PID: id },
        })
    })
}


function sort() {

    $(document).on('click', 'th', function () {

        var kol = $(this).attr('id');
        var sort = $(this).attr('sort');

        if (kol != 'cena' && kol != 'velicina') {
            alert('Sortiranje je moguće samo po ceni ili veličini proizvoda!')
            return
        }

        $.ajax({
            url: 'sortiranjeProizvoda.php',
            method: 'post',
            data: { PKol: kol, PSort: sort },

            success: function (data) {
                $('#body-tbl').html(data);
            }
        })

        if (sort == 'asc') {
            $(this).attr('sort', 'desc');
        }
        if (sort == 'desc') {
            $(this).attr('sort', 'asc');
        }


    })
}