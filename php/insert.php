<?php
    require_once("config.php");

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

        if($result){
            echo "เพิ่มข้อมูลเรียบร้อย";
            header('Location: ../show-data.php');
        }

    }
    else{
        header('Location: ../form-create.php'); //คำสั่งแตะไปหน้าอื่น
    }
    
?>