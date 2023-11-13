<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">
    <h2>會員登入</h2>
    <form action="" method='post'>
      <?php
      if(isset($_GET)){
        echo "<span style='color:red>";
        echo $_GET['error'];
        echo "<span>";
      }
      ?>
    <div class="row col-8 my-4">
      <label for="" class="col-3">帳號：</label>
      <input type="text" name="acc" id="acc" class="col-9 rounded border-0 border-bottom border-1 ">
    </div>
    <div class="row col-8 my-4">
      <label for="" class="col-3">密碼：</label>
      <input type="text" name="pw" id="pw" class="col-9 rounded border-0 border-bottom border-1 ">
    </div>
    <div class="text-center">
      <input type="submit" value="送出" class="btn btn-primary mx-2">
      <input type="reset" value="重置" class="btn btn-warning mx-2">
    </div>
    </form>


  </div>
  </div>
</body>

</html>