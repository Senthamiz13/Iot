<?php
$myfile = fopen("command.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("command.txt"));
fclose($myfile);
?>