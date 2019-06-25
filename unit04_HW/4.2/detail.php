<!DOCTYPE<html>
 <head>
     <title>Thông tin sinh viên</title>
     <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style type="text/css">
      body{
        background-color: #ccccff;
    }
  </style>
 </head>
 <body>
    <div class="container">
        <legend><h2 class="text-center">Thông tin sinh viên</h2></legend>
    <?php 
if (!empty($_POST['detail']))
{
    require("add_process.php");
 
    $student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';
    $student_name = isset($_POST['student_name']) ? $_POST['student_name'] : '';
    $student_email = isset($_POST['student_email']) ? $_POST['student_email'] : '';
    $student_phone = isset($_POST['student_phone']) ? $_POST['student_phone'] : '';
    $student_gender = isset($_POST['student_gender']) ? $_POST['student_gender'] : '';
    $student_address = isset($_POST['student_address']) ? $_POST['student_address'] : '';
detailStudent($student_id , $student_name, $student_email,$student_phone,$student_gender,$student_address);       
}
 ?>
<a href="list.php" class="btn btn-primary">BACK</a>
    </div>

    
 

 
 </body>
 </html>

