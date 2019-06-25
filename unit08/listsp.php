<?php 

    //Ket noi co so du lieu

    // Thong so ket noi CSDL
include_once('connection.php');
/*if (isset($_GET['TYPE_CODE'])) {
 $query = "SELECT p.*, t.TYPE_NAME FROM products p JOIN products_type t ON p.TYPE = t.TYPE_CODE WHERE t.TYPE_CODE= '".$_GET['TYPE_CODE']."'";
} else {

  $query = "SELECT p.*, t.TYPE_NAME FROM products p JOIN products_type t ON p.TYPE = t.TYPE_CODE";
}*/

    // Cau lenh truy van co so du lieu
//SELECT products.*, products_type.TYPE_NAME FROM products  JOIN products_type  ON products.TYPE = products_type.TYPE_CODE
    $query="SELECT * FROM products"; //lay tât cả bảng
    // Thuc thi cau lenh truy van co so du lieu
    $data=array();
    $result = $conn->query($query);

    while($row = $result->fetch_assoc()) { 
      $data[]=$row;

    }
    

    

    ?>


    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
      
      
      <!-- Latest compiled and minified CSS & JS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <!-- Latest compiled and minified CSS & JS -->
      
      <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
      <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js" > </script> 
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    </head>
    <body >
      <legend><h1 class="text-center">Quản lí bán hàng</h1></legend>



      <div class="container " >

      <!-- <?php 
      foreach ($data_type as $row_pt) {
        ?>
        <a href="listsp.php?TYPE_CODE=<?= $row_pt['TYPE_CODE'] ?>"><?= $row_pt['TYPE_NAME'] ?></a>
        <?php } ?>  -->
        <a href="add_form.php?CODE=<?= $row['CODE'] ?>" class="btn btn-success">add</a>
        <table id="myTable" class="table table-striped">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Mã sản phẩm</th>
              <th scope="col">Tên sản phẩm</th>
              <th scope="col">Loại sản phẩm</th>
              <th scope="col">Ảnh sản phẩm</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Đơn giá</th>
              <th scope="col">#</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=0;
            foreach ($data as $row) {
              $i++;
              ?>
              <tr>
                <td><?= $i ?></td>
                <td><?= $row['CODE'] ?></td>
                <td><?= $row['NAME']?></td>
                <td><?= $row['NAME']?></td>
                <td><img width="50px" src="../unit07/images/products/<?= $row['PICTURE']?>"></td>
                <td><?= $row['QUANTITY'] ?></td>
                <td><?= number_format($row['PRICE']); ?></td>
                <td><a href="javascript: ;" class="btn btn-primary btn-show" data-id="<?= $row['CODE'] ?>"
                  data-toggle="modal" data-target="#modalShow">SHOW</a>
                  <a href="javascript: ;" class="btn btn-primary btn-edit" data-id="<?= $row['CODE'] ?>">edit-ajax</a>
                  <!-- javascript:; chống load trang -->
                  <a href="product_edit.php?CODE=<?= $row['CODE'] ?>" class="btn btn-success">EDIT</a>
                  <a href="product_deltete.php?CODE=<?= $row['CODE'] ?>" class="btn btn-warning btn-delete">DEL</a></td> 
                </tr>
              <?php } ?>
            </tbody>
          </table>    
        </div>

        <div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title text-center" id="exampleModalLabel">Show</h1>

              </div>
              <div class="modal-body">
                <div class="card" >
                  <img width="100px" id="picture_show"   class="card-img-top">
                  <div class="card-body">
                    <p >Mã sản phẩm : <span id="code_show"></span></p>
                    <p >Tên sản phẩm : <span id="name_show"></span></p>
                    <p >Số lượng sản phẩm : <span id="quantity_show"></span></p>
                    <p >Đơn giá sản phẩm : <span id="price_show"></span></p>

                  </div>
                </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        
      <script type="text/javascript">

       

        $('.btn-show').on('click',function(){
        //$('#modalShow').modal('show');


        var id = $(this).data('id');


      //alert(id);  
      $.ajax({
        type: 'get',
        dataType: 'json',
        url: 'product_detail.php?CODE='+id,
        success: function(response){
         console.log(response);
         $('#picture_show').attr("src","../unit07/images/products/"+response.PICTURE+"");
         $('#code_show').html(response.CODE);
         $('#name_show').html(response.NAME);
         $('#quantity_show').html(response.QUANTITY);
         $('#price_show').html(response.PRICE);
       }

     });




        $('#myTable').DataTable();


        $('.btn-delete').click(function(e){
          e.preventDefault();
          var url =$(this).attr('href');
          swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {

              window.location.href=url;
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
            } else {
              swal("Your imaginary file is safe!");
            }
          });

        });
      });
  </script>
</body>
</html>
