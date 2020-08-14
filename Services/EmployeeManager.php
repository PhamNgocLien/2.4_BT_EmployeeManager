<?php

namespace Service;

class EmployeeManager
{
    private $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function getEmployees(){
        return $this->employees = $this->loadDataJson('data.json');
    }

    public function add($employee)
    {
        $arr = [
            'family_name' => $employee->getFamilyName(),
            'name' => $employee->getName(),
            'birthday' => $employee->getBirthday(),
            'address' => $employee->getAddress(),
            'position' => $employee->getPosition()
        ];
        $this->loadDataJson('data.json');
        array_push($this->employees,$arr);
        $this->saveDataJson('data.json');
    }

    function loadDataJson($filename)
    {
        $dataJson = file_get_contents($filename);
        return json_decode($dataJson, true);
    }

    function saveDataJson($filename)
    {
        $dataJson = json_encode($this->employees);
        file_put_contents($filename, $dataJson);
    }
}