<?php
/**
 *
 */
class DBController extends CI_Controller
{

  public function index()
  {
    $query = $this->db->query("SELECT * FROM mahasiswa");

    $data['mahasiswa'] = $query->result();
    $this->load->view('mahasiswa', $data);
  }

  public function delete($nim)
  {
    $query = $this->db->query("DELETE FROM mahasiswa WHERE nim = '$nim'");
    $this->index();
  }
}


 ?>
