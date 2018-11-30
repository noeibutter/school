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
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <h3>เพิ่มนักเรียน</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <form action="php/insert.php" method="post">
                            <div class="form-gruop">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" required> <!-- ใส่ required เพื่อบังคับให้ user กรอกข้อมูล กันโค้ด error -->
                            </div>
                            <div class="form-gruop">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="fname">ชื่อ</label>
                                    <input type="text" class="form-control" name="fname" id="fname" required>
                                </div>
                                <div class="col">
                                    <label for="lname">นามสกุล</label>
                                    <input type="text" class="form-control" name="lname" id="lname" required>
                                </div>
                            </div>
                            <div class="form-gruop">
                                <label for="age">อายุ</label>
                                <input type="text" class="form-control" name="age" id="age" required>
                            </div>
                            <div class="form-gruop">
                                <label for="province">จังหวัด</label>
                                <select name="province" class="form-control" id="province" required>
                                    <option value="เชียงใหม่" selected>เชียงใหม่</option>
                                    <option value="กรุงเทพ">กรุงเทพ</option>
                                    <option value="ชลบุรี">ชลบุรี</option>
                                    <option value="สมุทรปราการ">สมุทรปราการ</option>
                                </select>
                            </div>
                            <div class="text-right mt-2">
                                <input type="submit" name="submit" class="btn btn-success" value="เพิ่มข้อมูล">
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