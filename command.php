<?php

$val = $_GET["command"];

$fileContent=$val;

unlink("command.txt");

$fileStatus=file_put_contents("command.txt",$fileContent,FILE_APPEND);

if($fileStatus != false)

{
                echo  "Data updated";
}

else

{
                echo  "Error unable to update data";
}

?>


<a href="index.php">Go to the index page</a>