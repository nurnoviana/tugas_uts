<?php if ($this->session->login('loginstatus', 'login') != True) {
  redirect('login');
}
?>

    <h1>Input Data Mahasiwa</h1>

    <form action="<?php echo base_url("mahasiswa/add") ?>" method="post">
      Masukkan NIM <br>
      <input type="text" name="nim"> <br>
      Masukkan Nama Mahasiswa <br>
      <input type="text" name="nama"> <br>
      Masukkan Alamat <br>
      <input type="text" name="alamat"> <br>
      Masukkan Tanggal Lahir <br>
      <input type="text" name="tgllhr"> <br>
      Masukkan Gender <br>
      <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
      <input type="radio" name="gender" value="Perempuan"> Perempuan <br>

      <input type="submit" name="submit" value="Tambah Data">
    </form>
