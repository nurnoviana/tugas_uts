<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Kalkulator</title>
  </head>
  <body>
    <h1>Penjumlahan</h1>
    <form action="Kalkulator/hasil" method="post">
    <input type="text" name="bilangan1" id="bilangan1" autocomplete="off" value="<?php echo (isset($bilangan1)?$bilangan1:0) ?>">
		<select name="operator" id="operator">
			<option value="+" <?php echo isset($operator) && $operator=='+' ? 'selected':'' ?>>Tambah</option>
			<option value="-" <?php echo isset($operator) && $operator=='-' ? 'selected':'' ?>>Kurang</option>
			<option value="*" <?php echo isset($operator) && $operator=='*' ? 'selected':'' ?>>Kali</option>
			<option value="/" <?php echo isset($operator) && $operator=='/' ? 'selected':'' ?>>Bagi</option>
		</select>
		<input type="text" name="bilangan2" id="bilangan2" autocomplete="off" value="<?php echo (isset($bilangan2)?$bilangan2:0) ?>">
		<input type="submit" name="submit" value="Hitung">
		<?php if (isset($hasil)): ?>
			<strong>
				<?php echo $hasil ?>
			</strong>
		<?php endif ?>
  </form>
  </body>
</html>
