<?php
function helloworld(){
  $a =& get_instance();
  $a->load->helper('string');
  echo repeater("Hello World, ", 10);
}

 ?>
