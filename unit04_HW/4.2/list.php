<?php
require ("add_process.php");
$students = getAllStudents();
?>
  
<!DOCTYPE html>
<html>
    <head>
          <title>Danh sách sinh viên</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    td {
      text-align: center !important;
    }
     th {
      text-align: center !important;
    }

  </style>
    </head>
    <body>
  <legend class="text-center"><h1>Danh sách sinh viên</h1></legend>
  <div class="container">
            <a href="add.php" class="btn btn-primary">ADD</a>
            <table class="table table-striped">
                  <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col ">ID</th>
          <th scope="col">NAME</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
                    <?php
        $i=0;
         foreach ($students as $item){
          $i++;
          ?>
                      <tr>
                            <td><?php echo $i; ?></td>
                            <td>
                                  <?php echo $item['student_id']; ?>
                            </td>
                            <td><?php echo $item['student_name']; ?></td>
                            <td>
                                  <form  method="post" action="delete.php">
                                        <input type="hidden" value="<?php echo $item['student_id']; ?>" name="student_id"/>
                                        <input onclick="return confirm('Do you want to delete ?');" type="submit" class="btn btn-danger" value="Delete" name="delete"/>
                                  </form>
              <form method="post" action="detail.php">
                                        <input type="hidden" value="<?php echo $item['student_id']; ?>" name="student_id"/>
                                        <input  type="submit" class="btn btn-warning" value="Detail" name="detail"/>
                                  </form>

                            </td>
                      </tr>
                    <?php } ?>
      </tbody>
            </table>
  </div>

    </body>
