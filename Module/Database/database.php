<?php
// 선언 -> 생성 -> 호출
// 데이터베이스 선언
class Database
{
    public $connect;

    //복합객체 - 객체지향의 (은닉화)
    // public, private , protected

    private $Table;
    private $database;
    public function setTable($name)
    {
        $this ->Table = $name;
    }

    public function getTable(){

        return $this ->Table;
    }

    // 생성자 메소드(함수)
    public function __construct($config)
    {
        echo "클래스 생성";~
        $this->connect = new mysqli($config['host'], $config['user'], $config['passwd'], $config['database']);
        // 성공 : connect_errno = 0 .. ! 1
        // 실패 : connect_errno = 1 .. ! 0
        if (!$this->connect->connect_errno) {
            echo "DB 접속 성공이에요";
        } else {
            echo "접속이 안되요. ㅠㅠㅠ";
        }
    }

    public function queryExecute($query)
    {
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            echo "쿼리 성공.";
        } else {
            print "쿼리 실패.";
        }

        return $result;
    }



    


    public function isTable($tablename){


        $query = "SHOW TABLES";
    $result = $this->queryExecute($query);

    $count = mysqli_num_rows($result);
    
    for ($i=0;$i<$count;$i++) {

        $row = mysqli_fetch_object($result);

        if($row->Tables_in_php == $tablename){

            return true;
        }
        return false;


    }

}



}
