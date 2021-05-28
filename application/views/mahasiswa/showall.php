<?php
  if ($this->session->login('loginstatus', 'login') != True) {
  redirect('login');
}
?>

    <h1>DATA MAHASISWA</h1>

    <table>
      <tr>
        <th>NIM</th>
        <th>Nama Mahasiwa</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
      <?php
          foreach ($mahasiswa as $x) {
            echo "<tr>";
            echo "<td>".$x->nim."</td>";
            echo "<td>".$x->nama."</td>";
            echo "<td>".$x->alamat."</td>";
            echo "<td>".$x->tgllhr."</td>";
            echo "<td>".$x->gender."</td>";
            echo "<td>".anchor("mahasiswa/edit/".$x->nim, "Edit")."
            | ".anchor("mahasiswa/del".$x->nim, "Hapus")."</td>";
            echo "</tr>";
          }
       ?>
    </table>
