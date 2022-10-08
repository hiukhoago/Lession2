<?php
//Hiển thị lỗi php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('./Model/CategoryModel.php');
$db = new CategoryModel();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}
switch ($action) {
    case "create":
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            if(empty($name)){
                $error = "Not Null";
            }else{
                $db->action("INSERT INTO tbcategory (name) VALUES ('$name')");
            }
        }
        require_once ("./View/CategoryCreate.php");
        break;
    case "edit":
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            foreach($db->getCategorybyId($id) as $row){
                $name = isset($row['name'])?$row['name']:'';
            }
        }
        require_once "../View/CategoryUpdate.php";
        break;
    case "delete":
        break;
    default:
        $data = $db->getAllCategory();
        require_once "../View/CategoryList.php";
        break;
}
