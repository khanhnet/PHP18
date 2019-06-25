<?php 
	include_once('connection.php');

	$data = $_POST;
	if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        
        $target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["PICTURE"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["PICTURE"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["PICTURE"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
    }

	/*$query = "UPDATE products SET CODE='".$data['CODE']."',NAME='".$data['NAME']."',QUANTITY='".$data['QUANTITY']."',PRICE='".$data['PRICE']."',TYPE='".$data['TYPE']."',PICTURE='".$data['PICTURE']."' WHERE CODE = '".$data['CODE']."' ";


    $status = $conn->query($query);*/


   
 echo '<pre>';
 print_r($data);
  echo '<pre>';
  	

  	//header('Location: listsp.php');
 ?>