<?php

namespace App\Factory;

use App\Entity\Car;
use App\Entity\Bicycle;
use App\Entity\Truck;
use App\Entity\Vehicule;

class VehiculeFactory
{
    public static function create($type, $costPerKm, $fuelType): Vehicule
    {
        switch ($type) {
            case 'car':
                return new Car($costPerKm, $fuelType);
            case 'bicycle':
                return new Bicycle($costPerKm, $fuelType);
            case 'truck':
                return new Truck($costPerKm, $fuelType);
            default:
                throw new \InvalidArgumentException('Type de véhicule inconnu');
        }
    }

    public static function createPerDistanceAndWeight($distance, $weight): Vehicule
    {
        if($distance <= 20 && $weight <= 20) {
            return new Bicycle(0.2, 'human');
        }

        if($weight < 200){
            return new Car(0.5, 'electric');
        } else {
            return new Truck(0.3, 'diesel');
        }
        
    }
}