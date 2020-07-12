<?php

$val = $_GET["volt"];

$fileContent=$val;

unlink("voltmeter.txt");

$fileStatus=file_put_contents("voltmeter.txt",$fileContent,FILE_APPEND);

if($fileStatus != false)

{

                echo  "SUCCESS DATA UPLOADED";

}

else

{

                echo  "ERROR UNABLE TO UPLOAD DATA";

}

?>