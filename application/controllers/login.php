<?php

/**
 *
 */
class Login extends CI_Controller
{

  public function index()
  {
    $data['page'] = 'formlogin';
    $this->load->view('siakad', $data);
  }

  public function proses()
  {
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    $query = "SELECT * FROM users WHERE email = '$username'";
    $hasil = $this->db->query($query);
    $result =  $hasil->row();

    if (isset($result)) {
      if ($result->password == $password) {
        $this->session->login_status = True;
        $this->session->username = $username;
        $this->session->fullname = $result->fullname;

        redirect('dashboard');
      } else {
        $data['errormsg'] = "Password Salah!";
        $data['page'] = 'formlogin';
        $this->load->view('siakad', $data);
      }
    } else {
      $data['errormsg'] = "username tidak ditemukan";
      $data['page'] = 'formlogin';
      $this->load->view('siakad', $data);
    }
  }

  public function logout()
  {
    session_destroy();
    redirect('login');
  }

  public function adduser()
  {
    $data['page'] = 'formregister';
    $this->load->view('siakad', $data);
  }

  public function simpan()
  {
    $username = $this->input->post('username');
    $fullnamee = $this->input->post('fullname');
    $pass1 = md5($this->input->post('pass1'));
    $pass2 = md5($this->input->post('pass2'));

    if ($pass1 == $pass2) {
      $query = "SELECT * FROM users WHERE email = '$username'";
      $hasil = $this->db->query($query);
      $result = $hasil->row();
      if (isset($result)) {
        $data['errormsg'] = "Username Sudah Ada";
        $data['page'] = 'formregister';
        $this->load->view('siakad', $data);
      } else {
        $query = "INSERT INTO users VALUES ('username', 'pass1', 'fullname')";
        $hasil = $this->db->query($query);
        $data['successmsg'] = True;
        $data['page'] = 'formregister';
        $this->load->view('siakad', $data);
      }
  } else {
    $data['errormsg'] = "Password Tidak Sama";
    $data['page'] = 'formregister';
    $this->load->view('siakad', $data);
  }
}
}

 ?>
