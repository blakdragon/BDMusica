<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    ?>
    <meta http-equiv="Refresh" content="0; url=./" />
    <?php
} else {
	$_SESSION['modo'] = 'consulta';
	header("location:index.php");
}
?>