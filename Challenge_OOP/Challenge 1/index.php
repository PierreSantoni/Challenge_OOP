<?php

require_once 'bicycle.php';
require_once 'car.php';


$bike = new Bicycle("blue");
$bike->setCurrentSpeed(0);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h<br><br>';

$batmobile = new Car("noir", 1, "nucléaire");
$batmobile->setCurrentSpeed(0);
$batmobile->setNbWheels(4);
$batmobile->setEnergyLevel(100);

echo "Voici la fameuse batmobile, elle est de couleur " . $batmobile->getColor() . ", elle a " . $batmobile->getNbWheels() . " roues et " . $batmobile->getNbSeats() . " place assise.<br>
Elle roule à l'énergie " . $batmobile->getEnergy() . " et son réservoir est actuellement à " . $batmobile->getEnergyLevel() ."%.<br><br>";

echo $batmobile->start();
echo "La batmobile roule maintenant à " . $batmobile->getCurrentSpeed() . " km/h.<br><br>";

echo $batmobile->forward(50);
echo "Elle roule désormais à " . $batmobile->getCurrentSpeed() . " km/h.<br><br>";

echo $batmobile->brake();

$theHomer = new car("verte", 4, "essence");
$theHomer->setCurrentSpeed(0);
$theHomer->setNbWheels(4);
$theHomer->setEnergyLevel(100);

echo "Voici l'infâme Homer, elle est de couleur " . $theHomer->getColor() . ", elle a " . $theHomer->getNbWheels() . " roues et " . $theHomer->getNbSeats() . " places assises.<br>
Elle roule à l'" . $theHomer->getEnergy() . " et son réservoir est actuellement à " . $theHomer->getEnergyLevel() ."%.<br><br>";

echo $theHomer->start();
echo "La Homer roule maintenant à " . $theHomer->getCurrentSpeed() . " km/h.<br><br>";

echo $theHomer->forward(32);
echo "Elle roule désormais à " . $theHomer->getCurrentSpeed() . " km/h.<br><br>";

echo $theHomer->brake();