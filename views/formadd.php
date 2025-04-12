<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your info</title>
</head>

<body>
    <h1>
        <?php echo empty($_GET['id']) ? 'Register people' : 'Modify'; ?>
    </h1>
    <form action="action/saveform.php" method="post">
        <?php
        if (!empty($_GET['id'])) {
            echo '<input type="hidden" name="idinput" value="' . $_GET['id'] . '">';
        } ?>
        <div>
            <label>Name</label>
            <input type="text" name="nameinput" required>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="emailinput" required>
        </div>
        <div>
            <label>Age</label>
            <input type="number" name="ageinput" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <a href="people.php">Return</a>

</body>

</html>