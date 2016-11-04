<?php

$skipJSsettings = 1;
require_once("common.php");

DisableOutputBuffering();

?>

<html>
<head>
<title>
FPP Projector Control
</title>
</head>
<body>

<?php

echo "Status: ";

if (isset($_GET['cmd'])) 
{
	$cmd = $_GET['cmd'];

	switch ($cmd) {
		case 'on':
			system($SUDO . " /usr/local/bin/projector_on");
			break;
		case 'off':
			system($SUDO . " /usr/local/bin/projector_off");
                        break;
		default:
			break;

	}
}
else
{
	system($SUDO . " /usr/local/bin/projector_status");
}
?>
<br>
</body>
</html>
