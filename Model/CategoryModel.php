<?php 
require_once('db.php');
require_once('CategotyEntity.php');


class CategoryModel extends dbConfig
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAllCategory(){
       $getAll = $this->connect->prepare("SELECT * FROM tbcategory");
       $getAll->execute();
       $result = $getAll->fetchAll();
       return $result;
    }
    public function getCategorybyId($id){
        $getById = $this->connect->prepare("SELECT * FROM tbcategory WHERE id = '$id'");
        $getById->execute();
        $result = $getById->fetchAll();
        return $result;
     }
    public function action($sql){
        return true;
    }
}
?>