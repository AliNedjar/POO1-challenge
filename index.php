<?php


require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('purple');
var_dump($bike);

$bike->setCurrentSpeed(16);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();


$Volkswagen = new Car('black', 8, 'Electrical');
var_dump($Volkswagen);

$Volkswagen->setCurrentSpeed(50);

echo $Volkswagen->forward();
echo '<br> Vitesse actuelle:' . $Volkswagen->getCurrentSpeed() . 'km/h' . '<br>';
echo $Volkswagen->brake();
echo ' Vitesse actuelle: ' . $Volkswagen->getCurrentSpeed() . 'km/h' . '<br>';
