<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Model View Control Standard</title>
</head>
<body>
    <header>

    </header>

    <main>
    <a href="./Controller/CategoryController.php">Category manage</a>
    </main>

    <footer>

    </footer>
</body>
</html> -->
<?php
include "./Model/CategoryModel.php";
$db = new CategoryModel();
if (isset($_GET['Controller'])) {
    $controller = $GET['controller'];
} else {
    $controller = "";
}
switch ($controller) {
    case 'CategoryController':
        require_once "./Controller/CategoryController.php";
        break;
    default:
        require_once "./Controller/CategoryController.php";
        break;
}

?>