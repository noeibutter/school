<?php
    require_once("php/config.php");

    $id = $_GET['id']; // รับ id มากจาก การกดปุ่มแก้ไขของ user
    
    $sql = "SELECT * FROM `student` WHERE `id` = '".$id."'"; //โค้ด sql เลือกข้อมูล
    $result = $conn->query($sql);

    // ในกรณีที่เราแน่ใจว่าข้อมูลเราที่เรา query ออกมา มีแถวเดียวแน่นอน
    // ให้ยัด fetch_assoc เข้าไปในตัวแปรได้เลยโดยไม่ต้องใช้ while
    $row = $result->fetch_assoc();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    
    <!-- * trick* ข้อมูลใน input เรียกว่า value -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <h3>เพิ่มนักเรียน</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="php/update.php" method="post">
                            <div class="form-gruop">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" value="<?php echo $row['username']; ?>" required> <!-- เอาข้อมูลที่เรา fetch_assoc ออกมายัดใส่ใน value(ข้อมูลในช่อง input) -->
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="fname">ชื่อ</label>
                                    <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row['fname']; ?>" required>
                                </div>
                                <div class="col">
                                    <label for="lname">นามสกุล</label>
                                    <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['lname']; ?>" required>
                                </div>
                            </div>
                            <div class="form-gruop">
                                <label for="age">อายุ</label>
                                <input type="text" class="form-control" name="age" id="age" value="<?php echo $row['age']; ?>" required>
                            </div>
                            <div class="form-gruop">
                                <label for="province">จังหวัด</label>
                                <select name="province" class="form-control" id="province" value="<?php echo $row['province']; ?>" required>
                                    <option value="เชียงใหม่" <?php echo $row['province'] == 'เชียงใหม่' ?  'selected' : '' ; ?>>เชียงใหม่</option> <!-- short if มาจาก if รูปแบบเต็ม(อ่านต่อล่างสุด)-->
                                    <option value="กรุงเทพ" <?php echo $row['province'] == 'กรุงเทพ' ?  'selected' : '' ; ?>>กรุงเทพ</option>
                                    <option value="ชลบุรี" <?php echo $row['province'] == 'ชลบุรี' ?  'selected' : '' ; ?>>ชลบุรี</option>
                                    <option value="สมุทรปราการ" <?php echo $row['province'] == 'สมุทรปราการ' ?  'selected' : '' ; ?>>สมุทรปราการ</option>
                                </select>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="text-right mt-2">
                                <input type="submit" name="submit" class="btn btn-success" value="แก้ไข">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    // if เขียนรูปแบบเต็ม

    // if($row['province'] == 'เชียงใหม่'){    // ถ้า $row['province'] เท่ากับ "เชียงใหม่" ให้มัน echo คำว่า selected ออกมา
    //     echo "selected";
    // }   
    // else{                                 // ถ้า $row['province'] ไม่เท่ากับ เชียงใหม่ ก็คือมันเท่ากับค่าอื่นๆ นั่นเอง ให้มัน echo ค่าว่างออกมา
    //     echo '';
    // }
?>