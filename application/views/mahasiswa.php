
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
        <td>NIM</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Tanggal Lahir</td>
        <td>Gender</td>
        <td>Action</td>
      </tr>

      <?php
      foreach ($mahasiswa as $datamhs)
        {
              echo "<tr>";
              echo "<td>".$datamhs->nim."</td>";
              echo "<td>".$datamhs->nama."</td>";
              echo "<td>".$datamhs->alamat."</td>";
              echo "<td>".$datamhs->tgllhr."</td>";
              echo "<td>".$datamhs->gender."</td>";
              echo "<td>".anchor("dbcontroller/delete/".$datamhs->nim, "Hapus")."</td>";
              echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
