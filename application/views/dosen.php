<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
      table {
        border-collapse: collapse;
      }
      tr td {
        border: 1px solid black;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <td>ID Dosen</td>
        <td>Nama Dosen</td>
        <td>Alamat Dosen</td>
        <td>Nomor Telepon</td>
        <td>Gender</td>
        <td>Action</td>
      </tr>

      <?php
      foreach ($dosen as $datads)
        {
              echo "<tr>";
              echo "<td>".$datads->iddosen."</td>";
              echo "<td>".$datads->namadosen."</td>";
              echo "<td>".$datads->alamatdosen."</td>";
              echo "<td>".$datads->notlpdosen."</td>";
              echo "<td>".$datads->genderdosen."</td>";
              echo "<td>".anchor("dbcontroller/delete/".$datads->iddosen, "Hapus")."</td>";
              echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
