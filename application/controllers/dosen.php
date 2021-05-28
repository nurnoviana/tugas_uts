<?php

/**
 *
 */
class dosen extends CI_Controller
{
  //menampilkan semua data mahasiswa
  public function index()
  {
    $query = $this->db->query("SELECT * FROM dosen");
    $data['dosen'] = $query->result();
    $data['total'] = $query->num_rows();
    $this->load->view('dosen/showalldosen', $data);
  }

  //memunculkan form input data
  public function input()
  {
    $this->load->view('dosen/inputdosen');
  }

  //delete data mahasiswa
  public function del($nim)
  {
    $query = $this->db->query("DELETE FROM dosen WHERE iddosen = '$iddosen'");
    $this->index();
  }

  //update data mahasiswa
  public function edit($iddosen)
  {
    $query = $this->db->query("SELECT * FROM dosen WHERE iddosen = '$iddosen'");
    $data['dosen'] = $query->row();
    $this->load->view('dosen/editdosen', $data);
  }

  //membaca form untuk input ke database
  public function add()
  {
    $iddosen    = $this->input->post('iddosen');
    $namadosen   = $this->input->post('namadosen');
    $alamatdosen = $this->input->post('alamatdosen');
    $notlpdosen = $this->input->post('notlpdosen');
    $genderdosen = $this->input->post('genderdosen');

    $query = $this->db->query("INSERT INTO dosen VALUES ('$iddosen', '$namadosen', '$alamatdosen', '$notlpdosen', '$genderdosen')");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }

  public function update()
  {
    $iddosen    = $this->input->post('iddosen');
    $namadosen   = $this->input->post('namadosen');
    $alamatdosen = $this->input->post('alamatdosen');
    $notlpdosen = $this->input->post('notlpdosen');
    $genderdosen = $this->input->post('genderdosen');

    $query = $this->db->query("UPDATE dosen
      SET namadosen = '$namadosen', alamatdosen = '$alamatdosen', notlpdosen = '$notlpdosen', genderdosen = '$genderdosen' WHERE iddosen = '$iddosen'");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }
}


 ?>
