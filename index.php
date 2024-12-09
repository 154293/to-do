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
            $_POST['addTopic'],   //when a new item is added
            $_POST['addDescrip']
        ]);
        echo 'Item Added!';
    }

    if (isset($_POST['editItem'])) {  //when an item is edited
        $sql = "UPDATE `list` SET topic = ?, description = ?, status = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_POST['editTopic'],
            $_POST['editDescrip'],
            $_POST['editStatus'],
            $_POST['editID']
        ]);
        echo 'Item Edited!';
    }

    if (isset($_POST['delItem'])) { //when an item is deleted
        $sql = "DELETE FROM `list` WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_POST['delID']
        ]);
        echo 'Item Deleted!';
    }

    $list = $pdo->prepare("SELECT * FROM list"); //loads in list
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
                    <h2><?= $item['topic'] ?></h2>
                    <h4>Status:
                        <?php if ($item['status'] == '0') {
                            echo 'Not Done';
                        } else {
                            echo 'Done';
                        }
                        ?>
                    </h4>
                    <form action='edit.php' method='POST'>
                        <input type='hidden' name='itemID' value="<?= $item['id'] ?>">
                        <input type='submit' value='Edit'> <!--opens edit page with the right id -->
                    </form>
                </div>
                <p><?= $item['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>