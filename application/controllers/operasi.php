<?php
/**
 *
 */
class operasi extends CI_Controller{

  public function index(){
    $this->load->view('form_operasi');
  }

  public function submit(){
    $data['bil1'] = $this->input->post('bil1');
    $data['bil2']  = $this->input->post('bil2');

    $this->load->helper('operasi');

    $a = $this->input->post('a');
    $b = $this->input->post('b');
    $c = $this->input->post('c');
    $d = $this->input->post('d');

    if (isset($a)) {
      $data['hasil'] = jumlah($data['bil1'], $data['bil2']);
      $data['operator'] = '+';
    } elseif (isset($b)) {
      $data['hasil'] = kurang($data['bil1'], $data['bil2']);
      $data['operator'] = '-';
    } elseif (isset($c)) {
      $data['hasil'] = kali($data['bil1'], $data['bil2']);
      $data['operator'] = '*';
    } elseif (isset($d)) {
      $data['hasil'] = bagi($data['bil1'], $data['bil2']);
      $data['operator'] = '/';
    }

    $this->load->view('hasil', $data);

  }

  public function cobaHelper(){
    $this->load->helper('coba');
    helloworld();

    $this->load->helper('download');
    $data = 'Here is some text!';
    $name = 'mytext.txt';
    force_download($name, $data);
  }

}



 ?>
