<?php
  session_start();
  session_destroy();
  header("location: /PGlife/index.php");
  exit();
?>
