<?php

/**
 *
 */
class mahasiswa extends CI_Controller
{
  //menampilkan semua data mahasiswa
  public function index()
  {
    $query = $this->db->query("SELECT * FROM mahasiswa");
    $data['mahasiswa'] = $query->result();
    $data['total'] = $query->num_rows();
    $data['page'] = 'mahasiswa/showall';
    $this->load->view('siakad', $data);
  }

  //memunculkan form input data
  public function input()
  {
    $data['page'] = 'mahasiswa/forminput';
    $this->load->view('siakad', $data);
  }

  //delete data mahasiswa
  public function del($nim)
  {
    $query = $this->db->query("DELETE FROM mahasiswa WHERE nim = '$nim'");
    $this->index();
  }

  //update data mahasiswa
  public function edit($nim)
  {
    $query = $this->db->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $data['mahasiswa'] = $query->row();
    $data['page'] = 'mahasiswa/formedit';
    $this->load->view('siakad', $data);
  }

  //membaca form untuk input ke database
  public function add()
  {
    $nim    = $this->input->post('nim');
    $nama   = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $tgllhr = $this->input->post('tgllhr');
    $gender = $this->input->post('gender');

    $query = $this->db->query("INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$alamat', '$tgllhr', '$gender')");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }

  public function update()
  {
    $nim    = $this->input->post('nim');
    $nama   = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $tgllhr = $this->input->post('tgllhr');
    $gender = $this->input->post('gender');

    $query = $this->db->query("UPDATE mahasiswa
      SET nama = '$nama', alamat = '$alamat', tgllhr = '$tgllhr', gender = '$gender' WHERE nim = '$nim'");
    if ($query) {
      $this->index();
    } else {
      echo "<h2>Input Gagal</h2>";
    }
  }
}


 ?>
