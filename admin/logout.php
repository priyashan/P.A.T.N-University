<?php
error_reporting(E_ALL ^ E_NOTICE );
session_start();



?>
<?php

	session_destroy();
	unset($_SESSION['user']);
  ?> <script> window.location.href="../index.php"; </script>
	  
	  <?php
?>