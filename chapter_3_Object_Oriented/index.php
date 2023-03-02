<?php

require_once './class/Calendar.php';

$calendar = new Calendar();
$calendar->name = 'Year Planner';
$calendar->weeksInYear = 365 / 7;
var_dump($calendar->weeksInYear);
