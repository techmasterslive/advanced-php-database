<?php

function showName(string $name) : string
{
    return "You have provided ".$name;
}

showName('Mizan');

function showAge(int $age) : string
{
    return "Your age is ".$age;
}

showAge(39); // Your age is 39
showAge('Mizan');  // type error with strict mode on

function getYear() : int
{
    return 2019;
}

getYear(); // 2019

function getMonth() : int
{
    return "01";
}

getMonth(); //type error as return type should be integer not string

function getDayName(int $day) : string
{
    $days = ['Sat','Sun','Mon','Tue','Wed','Thu','Fri'];
    return $days[$day] ?? null;
}

getDayName(0); // Sat
getDayName(8); // type error as null is not a valid return type

function getDayNameOrNull(int $day) : ?string
{
    $days = ['Sat','Sun','Mon','Tue','Wed','Thu','Fri'];
    return $days[$day] ?? null;
}

getDayNameOrNull(0); // Sat
getDayNameOrNull(8); // type error as null is not a valid return type