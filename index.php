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

    $list = $pdo->prepare("SELECT * FROM list");
    $list->execute();
    $list->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection Failed $e";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="outer">

        <header>
            <h1>To-Do List</h1>
            <a href=add.php>Add List Item</a>
        </header>

        <?php foreach ($list as $item) : ?>
            <div class="item">
                <div class="itemHeading">
                    <h3><?= $item['topic'] ?></h3>
                    <h3>Status: <? $item['status'] ?></h3>
                    <form action='editItem.php' method='POST'>
                        <input type='hidden' name='itemID' value="<? $item['id'] ?>">
                        <input type='submit' value='Edit'>
                    </form> 
                </div>
                <p><?= $item['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>