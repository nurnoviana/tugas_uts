<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Penjumlahan</title>
  </head>
  <body>
    <h1>Penjumlahan</h1>
    <form action="index.php/Mycontroller2/hasil" method="post">

      Masukkan Bilangan Pertama : <br>
      <input type="text" name="bil1"> <br>

      Masukkan Bilangan Kedua : <br>
      <input type="text" name="bil2"> <br>

      <input type="submit" name="submit" value="jumlahkan">

    </form>

    <?php
      if (isset($hasil)) {
        echo "<p>Hasilnya adalah : $hasil</p>";
      }
     ?>
  </body>
</html>
