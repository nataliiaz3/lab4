<?php
if (isset($_POST["firstnumber"]) && isset($_POST["secondnumber"]) && isset($_POST["op"]))
{
$fnumber = htmlspecialchars($_POST["firstnumber"]);
$snumber = htmlspecialchars($_POST["secondnumber"]);
$op = htmlspecialchars($_POST["op"]);
switch($op)
{
case "addition":
echo  $fnumber+$snumber;
break;
case "subtraction":
echo  $fnumber-$snumber; 
break; 
case "division":
echo  $fnumber/$snumber; 
break; 
case "multiplication":
echo  $fnumber*$snumber; 
break; 
default:
echo "Невозможно произвести вычисления!"; 
}
}
else
{   
echo "Невозможно произвести вычисления!";
}
?>