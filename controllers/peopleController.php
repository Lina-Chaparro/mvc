<?php
namespace app\controllers;

use app\models\entities\Person;

class PeopleController{
    public function queryAllPeople(){
        $person=new Person();
        $data=$person->all();
        return $data; //un array tipo personas en el array data
    }
}