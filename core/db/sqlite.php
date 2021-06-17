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

        echo "ket noi db sqlite thanh cong".PHP_EOL;
        
        $this->pdo=null;
        var_dump($this->pdo);
    }
}
