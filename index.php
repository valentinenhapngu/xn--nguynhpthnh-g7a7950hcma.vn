<?php
echo "hello world!<br>".PHP_EOL;
echo "test webhook, hihi<br>".PHP_EOL;
echo "intall code, clone git<br>".PHP_EOL;

include "core/db/sqlite.php";

$x = new SQLiteConnection;
$x->connect();

// *** INSERT INTO abouts(id,name,des,scr,note) VALUES(?,?,?,?,?) (mang)
// $tbname = "abouts";
// $arr_value = [
//     "field_selected" => ['id','name','des','scr','note'],
//     "field_value_list" => [
//         [ 3 , "name3", "name3", "name3", "name3"],
//         [ 4 , "name3", "name3", "name3", "name3" ]
//     ]
// ];
// $x->insert($tbname,$arr_value["field_selected"],$arr_value["field_value_list"]);




$x->disconect();

?>
