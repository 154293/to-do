<?php

include 'connect.php';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    if (isset($_POST['addItem'])) {
        $sql = "INSERT INTO list (topic, description) VALUES (?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_POST['addTopic'],
            $_POST['addDescrip']
        ]);
        echo 'Item Added!';
    }
} catch (PDOException $e) {
    echo "Connection Failed $e";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="add">
        <h1>Add Item</h1>
        <form class='newForm' action='index.php' method='POST' id='addItem'>
            <input type='text' name='addTopic' placeholder='Topic'>
            <textarea type='text' name='addDescrip' placeholder='Description'></textarea>
            <input type='submit' name='addItem' value='Add New Item'>
        </form>
    </div>
</body>

</html>