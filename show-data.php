<?php
    require_once("php/config.php");

    //sql เลือกข้อมูล ORDER BY `ชื่อฟิลด์` คือ เรียงจาก ASC น้อยไปมาก DESC //มากไปน้อย
    $sql = "SELECT * FROM `student` ORDER BY `id` ASC"; 
    $result = $conn->query($sql);


    // fetch แต่ละชนิด
    // $row_ar = $result->fetch_array(); //เอามาทั้ง index key
    // debug($row_ar);

    // $row_ac = $result->fetch_assoc(); //เอามาเฉพา key
    // debug($row_ac);

    // $row_rs = $result->fetch_result();
    // debug($row_rs);

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
    
    <div class="container">
        <div class="text-center mt-2">
            <h1>แสดงข้อมูล</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>Usernmae</th>
                                <th>Password</th>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>อายุ</th>
                                <th>จังหวัด</th>
                                <th>แก้ไข</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; while($row = $result->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['lname']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['province']; ?></td>
                                <td><a class="btn btn-primary" href="form-update.php?id=<?php echo $row['id']; ?>">แก้ไข</td> <!-- ส่งค่า id ไปแบบ get -->
                                <td><a class="btn btn-danger" href="php/delete.php?id=<?php echo $row['id']; ?>">ลบ</a></td> <!-- ส่งค่า id ไปแบบ get -->
                            </tr>
                            <?php $count++; } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>