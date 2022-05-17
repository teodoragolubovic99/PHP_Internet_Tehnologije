  <?php

    include('konekcija.php');

    $vrednost = $_POST['PVrednost'];

    $sql = "select pzd.id as pid, pzd.naziv, pzd.sifra, pzd.velicina, pzd.boja, pzd.cena, b.naziv as bnaziv from proizvod pzd join brend b on pzd.brend_id=b.id where pzd.naziv like '%" . $vrednost . "%' or pzd.sifra like '%" . $vrednost . "%' or b.naziv like '%" . $vrednost . "%'";
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
          <td style="width: 200px;">
              <button id="btn_izmena" value="<?php echo $proizvod['pid'] ?>" class="btn btn-success">Izmeni</button>
              <button id="btn_brisanje" value="<?php echo $proizvod['pid'] ?>" class="btn btn-danger">Kupljeno</button>
          </td>
      </tr>

  <?php } ?>