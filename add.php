<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="outer">
        <nav>
            <a href='index.php'>Back to List</a>
        </nav>
        <div class="add">
            <h1>Add Item</h1>
            <form class='newForm' action='index.php' method='POST' id='addItem'>
                <input type='text' name='addTopic' placeholder='Topic'>
                <textarea type='text' name='addDescrip' placeholder='Description'></textarea>
                <input type='submit' name='addItem' value='Add New Item'>
            </form>
        </div>
    </div>
</body>

</html>