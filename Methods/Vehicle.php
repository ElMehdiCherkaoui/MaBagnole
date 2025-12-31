<?php
class Vehicle
{
    private $Vehicle_id;
    private $vehicleImage;
    private $vehicleModel;
    private $vehicleDescription;
    private $vehiclePricePerDay;
    private $vehicleAvailability;
    private $vehicleIdCategory;

    public function __construct(
        $Vehicle_id = null,
        $vehicleImage = null,
        $vehicleModel = null,
        $vehicleDescription = null,
        $vehiclePricePerDay = null,
        $vehicleAvailability = null,
        $vehicleIdCategory = null
    ) {
        $this->Vehicle_id = $Vehicle_id;
        $this->vehicleImage = $vehicleImage;
        $this->vehicleModel = $vehicleModel;
        $this->vehicleDescription = $vehicleDescription;
        $this->vehiclePricePerDay = $vehiclePricePerDay;
        $this->vehicleAvailability = $vehicleAvailability;
        $this->vehicleIdCategory = $vehicleIdCategory;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString()
    {
        return "Vehicle (Vehicle_id: {$this->Vehicle_id}, vehicleModel: {$this->vehicleModel}, Price/Day: {$this->vehiclePricePerDay})";
    }
}