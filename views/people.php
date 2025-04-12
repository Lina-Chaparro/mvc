<?php //el orden importa
include '../models/drivers/conexionDB.php';
include '../models/entities/entity.php';
include '../models/entities/person.php';
include '../controllers/peopleController.php';

use app\controllers\PeopleController; //para usar con los namespace
use app\models\entities\Person;

$controller=new PeopleController();
$people= $controller->queryAllPeople();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
</head>
<body>
    <h1>People</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Legal Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($people as $person){
                echo '<tr>';
                echo '<td>'.$person->get('name').'</td>';
                echo '<td>'.$person->get('email').'</td>';
                echo '<td>'.$person->get('age').'</td>';
                echo '<td>'.$person->legalage().'</td>';
                echo '  <td>';
                echo '      <a href="formadd.php?id=' . $person->get('id') . '">Modificar</a>';
                echo '      <a href="action/deleteperson.php?id=' . $person->get('id') . '">Delete</a>';
                echo '  </td>';
                echo '<tr>';
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="formadd.php">Add new Person</a>
</body>
</html>