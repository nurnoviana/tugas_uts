<h2>Register</h2>

<?php


if (isset($errormsg)) {
  echo "<p> Registrasi Gagal : ".$errormsg."</p>";
}

if (isset($successmsg)) {
  echo "<p> Registrasi Gagal, silakan login ".anchor('login', 'login')."</p>";
}
?>

<form class="" action="<?php echo base_url('login/simpan'); ?>" method="post">
  username <input type="text" name="username"> <br>
  fullname <input type="text" name="fullname"> <br>
  password <input type="password" name="pass1"> <br>
  ulangi password <input type="password" name="pass2"> <br>
  <input type="submit" name="submit">
</form>
