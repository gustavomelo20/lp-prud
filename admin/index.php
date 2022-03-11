<?php

  session_start();

  if(!isset($_SESSION['id'])){
      unset($_SESSION);
      header('Location: login.php');
  }

  include('nav.php');
  include('aside.php');
  include('main.php');
  include('principal.php');
  include('footer.php');

  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="main.js"></script>


