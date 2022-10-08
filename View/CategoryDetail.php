<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category Detail</title>
</head>
<?php
    include_once('../Controller/CategoryController.php');
?>
<body>
    <header></header>
    <main>
        <h3>Name Categoty:<?=$categoryDetail->id ?></h3>
        <h3>Name Categoty:<?=$categoryDetail->name ?></h3>
        <?php  var_dump($categoryDetail);?>
    </main>
    <footer></footer>
</body>
</html>