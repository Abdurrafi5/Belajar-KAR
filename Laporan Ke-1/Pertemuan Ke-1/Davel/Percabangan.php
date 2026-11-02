<?php

// IF

$baju = true;

if ($baju) {
    echo "Variable baju bernilai true";
}

echo "<br>";

// ELSE 

$nilai = 50;

if ($nilai > 70) {
    echo "Selamat, anda lulus!"; //1
} else {
    echo "Mohon maaf, anda harus mengulang";
}

echo "<br>";

// TERNARY

$nilai = 50;

echo $nilai > 70 ? "Selamat, anda lulus!" : "Mohon maaf, anda harus mengulang";

echo "<br>";

echo $nilai < 50 ? "TRUE" : "FALSE";