<?php 
include_once './include/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body >
<!-- <header class="nav bg-danger">
    <div class="nav-item bg-info col-4"></div>
    <div class="nav-item col-4">
        <ul class='d-flex justify-content-evenly'>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
    <p>aa</p>
    <div class="nav-item col-4">
        <?php
        if(isset($_SESSION['user'])){
            echo "歡迎光臨 ".$_SESSION['user'];
            echo "<a href='./api/logout.php' class='btn btn-info mx-2'>登出</a>";
            echo "<a href='member.php' class='btn btn-success mx-2'>會員中心</a>";
        }else{
         ?>
        <a href="reg.php" class="btn btn-primary mx-2">註冊</a>
        <a href="login_form.php" class="btn btn-success mx-2">登入</a> 
         <?php
        }
        ?>
        
    </div>
</header> -->
<div class="min-vh-100 w-100">
<?php include './include/header.php';?>
<?php include './include/footer.php';?>

</div>
</body>
</html>