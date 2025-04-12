<?php
namespace app\controllers;

use app\models\entities\Person;

class PeopleController{
    public function queryAllPeople(){
        $person=new Person();
        $data=$person->all();
        return $data; //un array tipo personas en el array data
    }
    public function saveNewPerson($request){
        $person = New Person();
        $person->set('name',$request['nameinput']);
        $person->set('email',$request['emailinput']);
        $person->set('age',$request['ageinput']);
        return $person->save();
    }

    public function updatePerson($request){
        $person = New Person();
        $person->set('id',$request['idinput']);
        $person->set('name',$request['nameinput']);
        $person->set('email',$request['emailinput']);
        $person->set('age',$request['ageinput']);
        return $person->update();
    }

    public function deletePerson($id){
        $person = New Person();
        $person->set('id',$id);
        return $person->delete();
    }
}