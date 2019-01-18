<?php
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y-m-d")."<br>";
echo "Today is ".date("Y.m.d")."<br>";
echo "Today is ".date("l")."<br>";
echo "Today is ".date("d/Y/m")."<br>";

date_default_timezone_set("Asia/Kolkata");
echo "The time is " . date("h:i:s a")."<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}



?>