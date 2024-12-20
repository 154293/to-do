<?php

include 'connect.php';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    if (isset($_POST['itemID'])) {
        $list = $pdo->prepare("SELECT * FROM list WHERE id = ?");
        $list->execute([$_POST['itemID']]);
        $list->setFetchMode(PDO::FETCH_ASSOC);
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
    <title>Edit List Item</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="outer">
        <?php foreach ($list as $item) : ?>
            <nav>
                <a href='index.php'>Back to List</a>
                <form action='index.php' method='POST' id='delItem'>
                    <input type='hidden' name='delID' value='<?= $item['id'] ?>'>
                    <input type='submit' name='delItem' value='Delete Item'>
                </form>
            </nav>
            <div class="add">
                <h1>Edit Item</h1>
                <form class='newForm' action='index.php' method='POST' id='editItem'>
                    <input type='hidden' name='editID' value='<?= $item['id'] ?>'>
                    <input type='text' name='editTopic' value='<?= $item['topic'] ?>'>
                    <textarea name='editDescrip' rows='5' cols='25'><?= $item['description'] ?></textarea>
                    <select name='editStatus'>
                        <option value='0'>Not Done</option>
                        <option value='1'>Done</option>
                    </select>
                    <input type='submit' name='editItem' value='Confirm Edit'>
                </form>
            </div>
        <?php endforeach ?>
    </div>
</body>

</html>