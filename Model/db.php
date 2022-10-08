<?php 
    class dbConfig{
        private $host_name='localhost';
        private $db_name='category';
        private $user_name='root';
        private $password='';
        
        public function __construct()
        {
            try{
                $this->connect = new PDO("mysql:host=$this->host_name;dbname=$this->db_name",$this->user_name,$this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //    //CREATE table Category.

    //     $sql= "CREATE TABLE `categoty`.`tbcategory` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
    //     `category_name` VARCHAR(50) NULL DEFAULT NULL,
    //     PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    //     $connect->exec($sql);

    //      //INSERT INTO database EVENTS table
    //      // Sử dụng shift + alt + nút xuống, lên để nhân đôi

    //     $sql = "INSERT INTO `tbcategory` (`event_name`)
    //     VALUE ('Category1'),
    //     ('Categoty 2'),
    //     ('Category 3'),
    //     ('Categoty 4')";
    //    $connect->exec($sql);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
