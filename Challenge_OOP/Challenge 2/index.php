<?php

require_once 'Truck.php';

$optimusPrime = new Truck('bleu et rouge', 3, 'fuel');
$optimusPrime->setCurrentSpeed(0);
$optimusPrime->setNbWheels(10);
$optimusPrime->setEnergyLevel(100);
$optimusPrime->setStock(80);

echo "Voici le célèbre Optimus Prime, il est de couleur " . $optimusPrime->getColor() . ", il a " . $optimusPrime->getNbWheels() . " roues et " . $optimusPrime->getNbSeats() . " places assises.<br>
Il roule au " . $optimusPrime->getEnergy() . " et son réservoir est actuellement à " . $optimusPrime->getEnergyLevel() ."%.<br><br>
Il est sur le point de partir avec un stock de " . $optimusPrime->getStock() . "%, son état de stockage est donc : " . $optimusPrime->fullStock() . ".<br><br>";

echo $optimusPrime->start();
echo "Optimus Prime roule maintenant à " . $optimusPrime->getCurrentSpeed() . " km/h.<br><br>";

echo $optimusPrime->forward();
echo $optimusPrime->brake();
$optimusPrime->setStock(100);

echo '<br><br>Après ce chargement son état de stockage est ' . $optimusPrime->fullStock() . ".";

