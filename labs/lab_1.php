<?php

namespace Examples;

require_once "../vendor/autoload.php";

use DateTime;
use DateTimeZone;

$date = new DateTime();
$start = new DateTime("1970-01-01");
$end = new DateTime("1961-12-04");
$diff = $end->diff($start)->days * 86400;
$date->setTimestamp($diff)->setTimezone(new DateTimeZone('Europe/Moscow'));
echo $date->format('Y/m/d H:i:s');
// Лабораторная 1.2 Реализация автозагрузки
echo '<br/>';
$cat1 = new Cat('coco');
echo $cat1->name;
