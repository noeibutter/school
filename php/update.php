<?php
    require_once("config.php");

    //ตรวจสอบว่ามีตัวแปร $_POST['submit'](มาจาก name="submit" ให้ปุ่ม submit หน้า form-create.php) เกิดขึ้นละยัง
    if(isset($_POST['submit'])){
        
        // รับค่ามารูปแบบ post(method ใน form)
        $id = $_POST['id']; //<< รับตัวแปร id มา เอาไว้ใช้เป็นเงือนไขในการ update ข้อมูล
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
                WHERE `id` = '".$id."' "; //<<แก้ไขข้อมูล ที่มี id เท่ากับ ไอดีที่เรารับมา(จาก input type="hidden" หน้า form-update.php)

        $result = $conn->query($sql);

        // ถ้าเพิ่มเสร็จให้ทำอะไรใช้ ตัวแปร $result ในการตรวจเช็ค
        if($result){
            echo "<script> alert('verification recapcha failed'); </script>";
            header('Refresh:0; url = ../show-data.php');
        }
        else{
            echo "แก้ไขข้อมูลไม่สำเร็จ<br>";
        }
    }
    

?>