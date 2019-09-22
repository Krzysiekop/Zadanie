<?php

$text = $_POST['hidden_text'];

$fp = fopen('test.csv', 'w');
fwrite($fp, $text);
fclose($fp);

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename('test.csv'));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize('test.csv'));
readfile('test.csv');
exit;
?>
