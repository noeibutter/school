<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "school";

    $conn = new mysqli($host,$username,$password,$database); //เชื่อมต่อ database

    $conn->set_charset("utf8"); //รูปภาษา

    // function เอาไว้ debug
    function debug($string){
        echo '<pre>',print_r($string),'</pre>';
    }
?>