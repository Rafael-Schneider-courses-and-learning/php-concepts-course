<?php

$age = 21;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($age >= 18) {
    echo "Você tem $age anos." . PHP_EOL;
    echo "Pode entrar!";
}
