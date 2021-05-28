<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Penjumlahan</title>
  </head>
  <body>
    <h1>Penjumlahan</h1>

    <?php
      $this->load->helper('form');
      echo form_open('operasi/submit');

      ?>

      Masukkan Bilangan Pertama : <br>
      <input type="text" name="bil1"> <br>

      Masukkan Bilangan Kedua : <br>
      <input type="text" name="bil2"> <br>

      <input type="submit" name="a" value="penjumlahan">
      <input type="submit" name="b" value="pengurangan">
      <input type="submit" name="c" value="perkalian">
      <input type="submit" name="d" value="pembagian">

    <?php
    $options = array(
      'small'         => 'Small Shirt',
      'med'           => 'Medium Shirt',
      'large'         => 'Large Shirt',
      'xlarge'        => 'Extra Large Shirt',
    );
    echo form_dropdown('shirts', $options, 'large');
    echo form_close();
     ?>

    <?php
      if (isset($hasil)) {
        echo "<p>Hasilnya adalah : $hasil</p>";
      }
     ?>
  </body>
</html>
