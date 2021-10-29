<?php
// session_start();
// require_once "./mvc/Bridge.php";
// $myApp = new App();

// class DB{

//     public $con;
//     protected $servername = "localhost";
//     protected $username = " u848302103_root";
//     protected $password = "1234@Abcd@";
//     protected $dbname = "u848302103_php_mvc";

//     function __construct(){
//         $this->con = mysqli_connect($this->servername, $this->username, $this->password);
//         mysqli_select_db($this->con, $this->dbname);
//         mysqli_query($this->con, "SET NAMES 'utf8'");
//     }

// } 
// include_once "./mvc/core/DB.php";

 $servername = "localhost";
     $username = "u848302103_root";
     $password = "1234@Abcd@";
     $dbname = "u848302103_php_mvc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


?>