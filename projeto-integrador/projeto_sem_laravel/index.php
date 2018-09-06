<?php
  include_once 'head.php';
  include_once 'header.php';
  include_once 'navbar.php';
  include_once 'sections.php';
  include_once 'footer.php';
  if($_GET["sair"] = 1){
    session_destroy();
  }
 ?>
