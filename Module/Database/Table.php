<?php


// 선언

class Table
{
    public $table_name;


    public function __construct()
    {

        echo "테이블 클래스 생성";
    }


    //테이블 생성
    public function createTable()
    {
        echo "테이블 생성";

        $query = "
        CREATE TABLE `members` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `LastName` varchar(255),
            `FirstName` varchar(255),
            PRIMARY KEY(`id`) 
            ) ENGINE=innodb default charset=utf8;
        ";

        mysqli_query($this ->Database->connect, $query);

    }
}