
<?php
 $myfile = fopen("voltmeter.txt", "r") or die("Unable to open file!");
 $volt=fread($myfile,filesize("voltmeter.txt"));
 fclose($myfile);
 
 $myfile = fopen("command.txt", "r") or die("Unable to open file!");
 $command=fread($myfile,filesize("command.txt"));
 fclose($myfile);
 
 
?>

<html>
<body>
<head>
    
<title>MY IOT</title>

<body background="bg.jpg">

<h1 style="font-family:verdana;font-size:60px;text-align:center;"><b>MY IOT PROJECT</b></h1>

<h2 style="font-family:courier;font-size:40px;text-align:center;"><b>Voltmeter</b></h2>

<p style="font-family:courier;font-size:40px;text-align:center;">
  <?php 
    echo $volt; 
  ?> volts 
</p>

<p style="font-family:courier;font-size:30px;text-align:center;"><b>Command in file</b></p>

<p style="font-family:courier;font-size:20px;text-align:center;">
    <?php
    echo $command;
    ?>
</p>

<h3 style="font-family:courier;font-size:40px;text-align:center;"><b>Motor Control</b></h3>

<button style="font-size:30px;"onclick="location.href='command.php?command=mtclk'">Clockwise</button>
<button style="font-size:30px;"onclick="location.href='command.php?command=mtaclk'">Anti-Clockwise</button>
<button style="font-size:30px;"onclick="location.href='command.php?command=mtstp'">Stop</button>

<h3 style="font-family:courier;font-size:40px;text-align:center;"><b>Function Generator</b></h3>

<button style="font-size:30px;"onclick="location.href='command.php?command=sinw'">Sine</button>
<button style="font-size:30px;"onclick="location.href='command.php?command=triw'">Triangle</button>
<button style="font-size:30px;"onclick="location.href='command.php?command=sqw'">Square</button>
<button style="font-size:30px;"onclick="location.href='command.php?command=fnstp'">Stop</button>

<p style="font-family:courier;font-size:15px;text-align:center;"> This site is designed by EIE batch of 2015-2019
</p>

</head>
</body>
</html>