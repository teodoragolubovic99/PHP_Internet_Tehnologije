$(function () {
    sacuvajProizvod();
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