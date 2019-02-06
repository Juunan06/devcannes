<?php
//--- Phase de maintenance ---//
include './inc/views/empty.inc.php';

//--- Switch normal ---//
if (isset($_GET["p"]))
	$page = $_GET["p"];
else
	$page = NULL;

switch ($page) {
	case 'index':
	default:
		# code...
		break;
}