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
  <a href="?mod=product&act=list" class="btn btn-success">back</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Ảnh sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn giá</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <td><?= $details['CODE'] ?></td>
        <td><?= $details['NAME']?></td>
        <td><?= $details['QUANTITY'] ?></td>
        <td><?= number_format($details['PRICE']); ?></td> 
     </tr>
  </tbody>
</table>    
 </div>
 </body>
 </html>