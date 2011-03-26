<?php
//	$db = mysqli_connect('localhost', 'RAdmin', 'umwresearch2011', 'mwcpscor_trinkleDB')
//		or die ("ERROR: connecting to mysql server!");
?>

<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';
mysql_close($link);
?>