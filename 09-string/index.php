<?php

$name = 'Adrigolo';
$age = 23;
echo 'Hello ' . $name . ', tu as ' . $age .' ans <br />'; // Affiche "Hello Adrigolo, tu as 23 ans"

echo sprintf('Hello %s, tu as %d ans', $name, $age); // Affiche "Hello Adrigolo, tu as 23 ans"
