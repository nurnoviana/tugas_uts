<?php if ($this->session->login('loginstatus', 'login') != True) {
  redirect('login');
}
?>

    <h1>Input Data Mahasiwa</h1>

    <form action="<?php echo base_url("mahasiswa/update") ?>" method="post">
      Masukkan NIM <br>
      <input type="text" name="nim" value="<?=$mahasiswa->nim?>"> <br>
      Masukkan Nama Mahasiswa <br>
      <input type="text" name="nama" value="<?=$mahasiswa->nama?>"> <br>
      Masukkan Alamat <br>
      <input type="text" name="alamat" value="<?=$mahasiswa->alamat?>"> <br>
      Masukkan Tanggal Lahir <br>
      <input type="text" name="tgllhr" value="<?=$mahasiswa->tgllhr?>"> <br>
      Masukkan Gender <br>
      <?php if ($mahasiswa->gender == "Laki-Laki") {
       ?>
      <input type="radio" name="gender" value="Laki-Laki" checked="checked"> Laki-Laki
      <input type="radio" name="gender" value="Perempuan"> Perempuan <br>

    <?php }else { ?>

      <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
      <input type="radio" name="gender" value="Perempuan" checked="checked"> Perempuan <br>

    <?php } ?>
      <input type="submit" name="submit" value="Tambah Data">
    </form>
