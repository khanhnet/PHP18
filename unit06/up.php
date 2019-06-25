<?php 

function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
		$target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$error_arr =array();
		
		// Check if file already exists
		if (file_exists($target_file)) {
		    $error_arr[] = "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES[$input_name]["size"] > $max_size) {
		    $error_arr[] = "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if(!in_array($imageFileType, $formats_allowed_array)) {
		    $error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
		    $uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    $error_arr[] = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
		        return $_FILES[$input_name]["name"];
		    } else {
		        $error_arr[] = "Sorry, there was an error uploading your file.";
		    }
		}
		return $error_arr;
	}


    if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        $uploads = file_upload("uploads","ANH_SP",500000,array('JPG', 'png','jpg'));
        if(gettype($uploads) == "array"){
            print_r($uploads); // Trả về mảng lỗi nếu ko upload được
        }else{
            echo "File name is: " . $uploads; // Trả về tên file nếu upload thành công
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<img id="blah" src="#" alt="your image" />
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="ANH_SP" id="ANH_SP">
    <input type="submit" name="submit">
</form>

<script type="text/javascript">
	function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#ANH_SP").change(function() {
  readURL(this);
});
</script>
</body>
</html>
