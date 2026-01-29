<?php

$datatime = new datatime();
$datatime->setdate(1999, 1, 20);
$datatime->settime(10, 10, 10, 0);

$datatime->add(new datainterval("PIV"));

$minusonemonth = new datainterval("PIM");
$minusonemonth->invert = true;
$datatime->add($minusonemonth);

var_dump($datatime);

$now = new datatime();
var_dump($now);
$now->settimezone(new datatimezone("america/toronto"));
var_dump($now);

$string = $now->foreat("y-m-d h:i:s");
echo "waktu saat ini : $string". PHP_EOL;

$date = datetime::createfromformat("y-m-d h:i:s", "2020-10-10 10:10:10", new datatime("asia/jakarta"));
if ($data) {
    var_dump($data);
} else {   
     echo "format salah" . PHP_EOL;
 }