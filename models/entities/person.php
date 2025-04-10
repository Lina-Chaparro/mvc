<?php

namespace app\models\entities;

use app\models\drivers\ConexionDB;

class Person extends Entity
{

    protected $id = null;
    protected $name = "";
    protected $email = "";
    protected $age = null;

    public function all() //para traer datos de persona
    {
        $sql = "select * from personas"; //preparar un string para mandar a la db
        $abrirconex = new ConexionDB(); //abrir conexion
        $resultDB = $abrirconex->execSQL($sql); //manda el sql

        $people = []; //crea un array para guardar los datos de person
        if ($resultDB->num_rows > 0) {
            while ($rowDB = $resultDB->fetch_assoc()) {
                $person = new Person();
                $person->set('id', $rowDB['id']);
                $person->set('name', $rowDB['nombre']);
                $person->set('email', $rowDB['email']);
                $person->set('age', $rowDB['edad']);
                array_push($people, $person); //agregar elementos a un array (lista, array)
            }
            $abrirconex->close(); //cierra la conexion
            return $people;
        }
    }
    public function legalage(){
        if($this->age >= 18){
            return 'Yes';
        }else{
            return 'No';
        }
    }
    public function save(){}
    public function update(){}
    public function delete(){}
}
