<?php
/**
 *
 */
class Kalkulator extends CI_Controller{

  public function index(){
    $this->load->view('formkalkulator');
  }

  public function hasil(){
    $this->load->model('Model_Calculator');
		$dataku['bilangan1'] = $this->input->post('bilangan1');
		$dataku['bilangan2'] = $this->input->post('bilangan2');
		$dataku['operator'] = $this->input->post('operator');
		$dataku['hasil'] = $this->Model_Calculator->hitung($dataku['bilangan1'],$dataku['bilangan2'],$dataku['operator']);
		$this->load->view('formkalkulator',$dataku);
  }
}



 ?>
