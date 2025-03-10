<?php
require('../vendor/autoload.php');

use App\Factory\VehiculeFactory;

$car = VehiculeFactory::create('car', 0.5, 'electric');
echo "Class: " . get_class($car) . "\n";
echo "Cost per km: " . $car->getCostPerKm() . "\n";
echo "Fuel type: " . $car->getFuelType() . "\n\n";

$bicycle = VehiculeFactory::createPerDistanceAndWeight(10, 10);
echo "Class: " . get_class($bicycle) . "\n";
echo "Cost per km: " . $bicycle->getCostPerKm() . "\n";
echo "Fuel type: " . $bicycle->getFuelType() . "\n\n";

$car = VehiculeFactory::createPerDistanceAndWeight(100, 100);
echo "Class: " . get_class($car) . "\n";
echo "Cost per km: " . $car->getCostPerKm() . "\n";
echo "Fuel type: " . $car->getFuelType() . "\n\n";

$truck = VehiculeFactory::createPerDistanceAndWeight(100, 250);
echo "Class: " . get_class($truck) . "\n";
echo "Cost per km: " . $truck->getCostPerKm() . "\n";
echo "Fuel type: " . $truck->getFuelType() . "\n\n";