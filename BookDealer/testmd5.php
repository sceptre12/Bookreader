<?php
$string = $argv[1];

print $string.PHP_EOL;
print crypt($string, md5($string)).PHP_EOL;

?>
