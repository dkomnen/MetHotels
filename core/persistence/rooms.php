<?php
/**
 * Entity class for room db table.
 */
class Room
{
    public $id;
    public $name;
    public $beds;
    public $roomArea;
    public $price;
    public $imageLocation;

    function __construct($name, $beds, $roomArea, $imageLocation, $price, $id = "") {
        if ($id != "") {
            $this->id = $id;
        }
        $this->name = $name;
        $this->beds = $beds;
        $this->roomArea = $roomArea;
        $this->imageLocation = $imageLocation;
        $this->price = $price;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getBeds() {
        return $this->beds;
    }

    function getRoomArea() {
        return $this->roomArea;
    }

    function getImageLocation() {
        return $this->imageLocation;
    }

    function getPrice() {
        return $this->price;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setBeds($beds) {
        $this->beds = $beds;
    }

    function setRoomArea($roomArea) {
        $this->roomArea = $roomArea;
    }

    function setImageLocation($imageLocation){
        $this->imageLocation = $imageLocation;
    }

}

?>