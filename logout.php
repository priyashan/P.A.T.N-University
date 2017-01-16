<?php
error_reporting(E_ALL ^ E_NOTICE );
session_start();



?>
<?php

	session_destroy();
	unset($_SESSION['user']);
	header("Location: index.php");
?>