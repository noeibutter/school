<?php
    require_once("config.php");

    //ตรวจสอบว่ามีตัวแปร $_GET เกิดขึ้นละยัง
    if(isset($_GET['id'])){

        $id = $_GET['id']; //ตัวแปร id รับค่า id ที่ส่งมาเป็น GET 

        $sql = "DELETE FROM `student` WHERE `id` = '".$id."'"; //sql ลบข้อมูลจากตาราง student ฟิงด์ id = ค่า id ที่ส่งมา
        $result = $conn->query($sql);

        // ถ้าลบเสร็จให้ทำอะไรใช้ ตัวแปร $result ในการตรวจเช็ค
        if($result){
            echo "ลบข้อมูลเรียบร้อย";
            header('Location: ../show-data.php');
        }
        else{
            echo "ลบข้อมูลไม่สำเร็จ";
        }
    }
    else{
        header('Location: ../show-data.php');
    }
?>