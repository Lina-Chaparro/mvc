<?php
include '../../models/drivers/conexionDB.php';
include '../../models/entities/entity.php';
include '../../models/entities/person.php';
include '../../controllers/peopleController.php';

use app\controllers\PeopleController;
$controller = new PeopleController();
$result = empty($_POST['idinput'])
    ?$controller->saveNewPerson($_POST)
    :$controller->updatePerson($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h1>Results of the data saving</h1>
<?php
if($result){
    echo '<p>Data deleted succesfully!</p>';
}else{
    echo '<p>Couldnt save data :c</p>';
}
    ?>
    <a href="../people.php">Return</a>

</body>
</html>