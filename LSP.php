<?php
abstract class Vehicle
{
	abstract public function start();
}

class Car extends Vehicle
{
	public function start()
    {
    	return "started";    
    }
    
}
class Truck extends Vehicle
{

	public function start()
    {
    	return "started";
    }
    
}

class VehicleController
{
	private $vehicle;
    
    	public function __construct(Vehicle $vehicle)
        {
         $this -> vehicle = $vehicle;
        }
        
        public function startVehicle()
        {
         echo $this -> vehicle -> start();
        }
        
}

$car = new Car();
$truck = new Truck();
$carController -> startVehicle();
$truckController -> startVehicle();
?>
