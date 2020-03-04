<?php
switch($_GET['p']) {
	default:
		include("table.php");
		break;
	
	case 'add':
		include("form.php");
		break;

	case 'preview':
		include("preview.php");
		break;
}
