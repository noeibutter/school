<?php
    require_once("config.php");

    //ตรวจสอบว่ามีตัวแปร $_POST['submit'](มาจาก name="submit" ให้ปุ่ม submit หน้า form-create.php) เกิดขึ้นละยัง
    if(isset($_POST['submit'])){
        
        // รับค่ามารูปแบบ post(method ใน form)
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $province = $_POST['province'];

        //sql เพิ่มข้อมูล
        $sql = "INSERT INTO `student` (`username`,`password`,`fname`,`lname`,`age`,`province`)
                            VALUES ('".$username."','".$password."','".$fname."','".$lname."','".$age."','".$province."')"; 
        $result = $conn->query($sql); 

        // ถ้าเพิ่มเสร็จให้ทำอะไรใช้ ตัวแปร $result ในการตรวจเช็ค
        if($result){
            echo "เพิ่มข้อมูลเรียบร้อย";
            header('Location: ../show-data.php');
        }

    }
    else{
        header('Location: ../form-create.php'); //คำสั่งแตะไปหน้าอื่น
    }
    
?>