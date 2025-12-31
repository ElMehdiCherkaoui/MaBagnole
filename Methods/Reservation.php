<?php
class Reservation
{
    private $reservation_Id;
    private $reservationStartDate;
    private $reservationEndDate;
    private $reservationPickupLocation;
    private $reservationStatus;
    private $reservationTotalAmount;
    private $reservationIdUser;
    private $reservationIdVehicle;

    public function __construct(
        $reservation_Id = null,
        $reservationStartDate = null,
        $reservationEndDate = null,
        $reservationPickupLocation = null,
        $reservationStatus = null,
        $reservationTotalAmount = null,
        $reservationIdUser = null,
        $reservationIdVehicle = null
    ) {
        $this->reservation_Id = $reservation_Id;
        $this->reservationStartDate = $reservationStartDate;
        $this->reservationEndDate = $reservationEndDate;
        $this->reservationPickupLocation = $reservationPickupLocation;
        $this->reservationStatus = $reservationStatus;
        $this->reservationTotalAmount = $reservationTotalAmount;
        $this->reservationIdUser = $reservationIdUser;
        $this->reservationIdVehicle = $reservationIdVehicle;
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
        return "Reservation (reservation_Id: {$this->reservation_Id}, reservationStatus: {$this->reservationStatus}, Total: {$this->reservationTotalAmount})";
    }
}