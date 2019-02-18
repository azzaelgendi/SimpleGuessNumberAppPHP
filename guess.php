<!DOCTYPE html>
<html>
<!--Revision AZZA ELGENDY , MONDAY APRIL 16,2018-->
<head>
	<title>Secret Number</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
$number=0; $guess=0; $name="";
if(isset($_POST['name']))
{
   $name = strtolower($_POST['name']);
   $name=ucfirst($name);
}
echo "Nice Guess  ".$name."</br>";
if(isset($_POST['secretNumber']))
{
   $number = $_POST['secretNumber'];
}
if(isset($_POST["guess"]))
{
    $guess  = ($_POST["guess"]);
}
if($guess == $number)
{
    echo "You Got It!!".$guess;
}
else
{
    echo " But Sorry Try again!!"."</br>";
    echo "your guess ".$guess . " is not correct"."</br>"; 
}
?>
</body>
</html>