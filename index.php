<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div id='app' class='container'>
    <h1>哈哈購物商城</h1>
    <form action=""></form>
<header class='Nav'>
    <div class='nav-item col-4'></div>
    <div class='nav-item col-4'>
        <ul class='d-flex justify-content-evenly'>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
    <div nav="nav-item col-4">
    <?php
    if(isset($_SESSION['user'])){
        echo 'welcome'.$_SESSION['user'];
        echo "<a href='logout.php' class='btn btn-info mx-2'>登出</a>";
    }else{
    ?>
    <a href="reg.php" class='btn btn-primary mx-2'>註冊</a>
    <a href="login.php" class='btn btn-primary mx-5'>登入</a>
    <?php
    }
    ?>
    </div>
    </div>
</header>
</body>
</html>