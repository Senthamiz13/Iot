<?php
$myfile = fopen("voltmeter.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("voltmeter.txt"));
fclose($myfile);
?>