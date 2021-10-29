<?php

class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = " u848302103_root";
    protected $password = "1234@Abcd@";
    protected $dbname = "u848302103_php_mvc";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

}

?>