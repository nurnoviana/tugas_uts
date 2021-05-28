
<?php
if (isset($errormsg)) {
  echo "<p>Login Gagal ".$errormsg."</p>";
}

 ?>

<form action="<?php echo base_url('login/proses');?>" method="post">
  Username <input type="text" name="username">
  Password <input type="password" name="password">
  <input type="submit" name="submit">
</form>
