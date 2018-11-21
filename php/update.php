<?php
    require_once("config.php");

    if(isset($_POST['submit'])){
        debug($_POST);
        // รับค่ามารูปแบบ post(method ใน form)
        $id = $_POST['id'];
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $province = $_POST['province'];

        $sql = "UPDATE `student`
                SET `username` = '".$username."',
                    `fname` = '".$fname."',
                    `lname` = '".$lname."',
                    `age` = '".$age."',
                    `province` = '".$province."'
                WHERE `id` = '".$id."' ";

        echo $sql;    

        $result = $conn->query($sql);

        if($result){
            echo "<script> alert('verification recapcha failed'); </script>";
            header('Refresh:0; url = ../show-data.php');
        }
        else{
            echo "แก้ไขข้อมูลไม่สำเร็จ<br>";
        }
    }
    

?>