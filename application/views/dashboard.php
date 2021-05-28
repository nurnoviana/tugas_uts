<h2>DASHBOARD</h2>

<p>Selamat Datang! <?php echo $this->session->fullname; ?>, Anda login dengan menggunakan username <?php echo $this->session->username; ?>
  , (<?php anchor('login/logout', 'Logout'); ?>)</p>


<ul>
  <li><?php anchor('mahasiswa'. 'Data Mahasiswa') ?></li>
  <li>Data Dosen</li>
  <li>Data Mata Kuliah</li>
</ul>
