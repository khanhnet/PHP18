<!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
    <legend><h1 class="text-center">Quản lí bán hàng</h1></legend>
    
 <div class="container">
  <a href="?mod=customer&act=list" class="btn btn-success">back</a>
    <table class="table table-striped">
     <thead>
       <tr>
         <th scope="col">Mã</th>
         <th scope="col">Tên</th>
         <th scope="col">Email</th>
         <th scope="col">Số điện thoại</th>
         <th scope="col">Địa chỉ</th>
       </tr>
     </thead>
     <tbody>
      <tr>
        <td><?= $details['CODE'] ?></td>
        <td><?= $details['NAME']?></td>
        <td><?= $details['EMAIL']?></td>
        <td><?= $details['MOBILE']?></td> 
        <td><?= $details['ADDRESS'] ?></td>

        
        
      </tr>
    </tbody>
  </table>    
 </div>
 </body>
 </html>