$(function () {
    sacuvajProizvod();
    vratiPodatkeZaProizvod();
});

$.ajaxStop(function () {
    window.location.reload();
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