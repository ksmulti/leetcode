<?php

class ParkingSystem {
    private $big_slots = 0;
    private $medium_slots = 0;
    private $small_slots = 0;
    private $big = 0;
    private $medium = 0;
    private $small = 0;

    /**
     * @param Integer $big
     * @param Integer $medium
     * @param Integer $small
     */
    function __construct($big, $medium, $small) {
        $this->big_slots = $big;
        $this->medium_slots = $medium;
        $this->small_slots = $small;
    }
  
    /**
     * @param Integer $carType
     * @return Boolean
     */
    function addCar($carType) {
        switch($carType) {
            case 1:
                if ($this->big < $this->big_slots) {
                    $this->big++;
                    return true;
                }
                break;
            case 2:
                if ($this->medium < $this->medium_slots) {
                    $this->medium++;
                    return true;
                }
                break;
            case 3:
                if ($this->small < $this->small_slots) {
                    $this->small++;
                    return true;
                }
                break;
        }
        return false;
    }
}

/**
 * Your ParkingSystem object will be instantiated and called as such:
 * $obj = ParkingSystem($big, $medium, $small);
 * $ret_1 = $obj->addCar($carType);
 */