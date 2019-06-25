<?php
require ("add_process.php");
$data = array();
$is_update_action = false;
 

if (!empty($_GET['id']))
{
    $data = getStudent($_GET['id']);
    $is_update_action  = true;
}
 
if (!empty($_POST['add_student']))
{
     
    $data['student_id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['student_name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['student_email'] = isset($_POST['email']) ? $_POST['email'] : '';     
    $data['student_phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';     
    $data['student_gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';     
    $data['student_address'] = isset($_POST['address']) ? $_POST['address'] : '';         
    if (empty($errors)){
        updateStudent($data['student_id'], $data['student_name'], $data['student_email'], $data['student_phone'], $data['student_gender'], $data['student_address']);
        
        header("Location:list.php");
    }
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>
    <body>
         <div class="container">
        <form  method="POST" role="form">
            <legend class="text-center"><h2>PHP & SESSION</h2></legend>
             
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="id" required="">
                    
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name" required="">
            </div>  
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone" required="">
            </div>  
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập email" name="email" required="">
            </div>  
             <div class="form-group">
                <label for="">Giới tính</label>
            <input type="radio" value="Nam"  name="gender" checked="">Nam
            <input type="radio" value="Nữ"  name="gender">Nữ  
            <input type="radio" value="Khác" name="gender">Khác
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="address" required="">
            </div>  
              
            <button type="submit" name="add_student" value="<?php echo ($is_update_action) ? "" : "Them moi"; ?>" class="btn btn-primary">Lưu thông tin</button>
            <a href="list.php" class="btn btn-primary">BACK</a>
       
      
                
                
                  
                   
                
                    
                </tr>
            </table>
        </form>
    </body>
</html>