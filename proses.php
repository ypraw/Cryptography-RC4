<?php


if (isset($_POST['plaintext']) ) {
include "rc4.php";
  $plaintext=$_POST['plaintext'];
  $key = $_POST['key'];


  $chipper_rc4=rc4($key,$plaintext);
  $plaintext_rc4=rc4Decrypt( $key,$chipper_rc4);

  echo "<div class='panel panel-primary' style='margin-top:25px;'>
    <div class='panel-heading'>Result</div>
    <div class='panel-body'>
    $chipper_rc4

    </div>
  </div>

  <div class='panel panel-danger' style='margin-top:35px;'>
    <div class='panel-heading'>plaintext decrypt</div>
    <div class='panel-body'>
    $plaintext_rc4
    </div>
  </div>"  ;



}
          /**/

?>
