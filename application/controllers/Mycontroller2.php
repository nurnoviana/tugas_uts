<?php
/**
 *
 */
class Mycontroller2 extends CI_Controller{

  public function index(){
    $this->load->view('formjumlah');
  }

  public function hasil(){
    $bil1 = $this->input->post('bil1');
    $bil2 = $this->input->post('bil2');
    $dataku['hasil'] = $bil1 + $bil2;

    $this->load->view('formjumlah', $dataku);
  }
}



 ?>
