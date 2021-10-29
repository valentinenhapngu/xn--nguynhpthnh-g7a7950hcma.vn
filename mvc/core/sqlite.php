<?php
include_once "./core/config.php";

//var_dump(PATH_TO_SQLITE_FILE); ok

class SQLiteConnection
{
    /**
     * PDO instance
     * @var type 
     */
    private $pdo;

    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    public function connect()
    {

        var_dump($this->pdo);
        try {
            $this->pdo = new PDO("sqlite:" . PATH_TO_SQLITE_FILE);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // handle the exception here
            echo "Ket noi that bai <-" . $e;
        }

        echo "ket noi db sqlite thanh cong" . PHP_EOL;
    }

    public function disconect()
    {
        $this->pdo = null;
        var_dump($this->pdo);
        echo "ngat ket noi db";
    }

    public function insert($tbname, $arr_field, $arr_value_list)
    {
        /*
        $x = new SQLiteConnection;
        $x->connect();
        $tbname = "abouts";
        $arr_value = [
            "field_selected" => ['id','name','des','scr','note'],
            "field_value_list" => [
                [ 3 , "name3", "name3", "name3", "name3"],
                [ 4 , "name3", "name3", "name3", "name3" ]
            ]
        ];
        $x->insert($tbname,$arr_value["field_selected"],$arr_value["field_value_list"]);
        $x->disconect();
        */

        $fields = "";
        $fieldsPre = "";
        $values = [];

        for ($i = 0; $i < sizeof($arr_field); $i++) {
            $fields .= $arr_field[$i] . ',';
            // $fieldsPre .= ':'.$arr_field[$i].',';
            $fieldsPre .= '?,';
        }
        $fields = trim($fields, ',');
        $fieldsPre = trim($fieldsPre, ',');
        // var_dump($fields);

        for ($i = 0; $i < sizeof($arr_value_list); $i++) {
            # code...
            $values[$i] = [];
            for ($j = 0; $j < sizeof($arr_value_list[$i]); $j++) {
                # code...
                array_push($values[$i], $arr_value_list[$i][$j]);
            }
            var_dump($values[$i]);
        }

        // $stmnt->execute([':userID'=> $userID,
        // ':toUser'=> $toUser,
        // ':subject' => $subject,
        // ':msg' => $msg,
        // ':sentOn' => $sentOn]);

        $sql = 'INSERT INTO ' . $tbname . '(' . $fields . ') VALUES(' . $fieldsPre . ')';
        var_dump($sql);
        $stmt = $this->pdo->prepare($sql);
        //loop to insert many
        //$stmt->bindValue($fieldsPre[0].'', $values[0] );
        //var_dump($values[0]);
        for ($i = 0; $i < sizeof($values); $i++) {
            # code...
            $stmt->execute($values[$i]);
        }
    }
}
