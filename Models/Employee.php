<?php
namespace Models;
class Employee{
    private $family_name;
    private $name;
    private $birthday;
    private $address;
    private $position;

    public function __construct($family_name,$name,$birthday,$address,$position)
    {
        $this->family_name = $family_name;
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->position = $position;
    }

    public function setFamilyName($family_name) {
        $this->family_name = $family_name;
    }
    public function getFamilyName() {
        return $this->family_name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setBirthday($birthday) {
        $this->birthday = $birthday;
    }
    public function getBirthday() {
        return $this->birthday;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
    public function getAddress() {
        return $this->address;
    }

    public function setPosition($position) {
        $this->position = $position;
    }
    public function getPosition() {
        return $this->position;
    }
}