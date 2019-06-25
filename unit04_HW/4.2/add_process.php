<?php  
session_start();
  
function getAllStudents()
{
    return isset($_SESSION['students']) ? $_SESSION['students'] : array();
}
 
function getStudent($student_id)
{
    $students = getAllStudents();
     
    foreach ($students as $item)
    {
        if ($item['student_id'] == $student_id){
            return $item;
        }
    }
     
    return array();
}
 

function deleteStudent($student_id)
{
    $students = getAllStudents();
     

    foreach ($students as $key => $item)
    {

        if ($item['student_id'] == $student_id){
            unset($students[$key]);
        }
    }
     

    $_SESSION['students'] = $students;
     
    return $students;
}
function detailStudent($student_id , $student_name, $student_email,$student_phone,$student_gender,$student_address)
{

    $students = getAllStudents();
     

    foreach ($students as $key => $item)
    {

        if ($item['student_id'] == $student_id){
             echo '<ul class="list-group list-group-flush ">
  <li >Mã sinh viên :'.$item['student_id'].'</li>
  <li >Họ và tên :'.$item['student_name'].'</li>
  <li >Số điện thoại :'.$item['student_phone'].'</li>
  <li >Email :'.$item['student_email'].'</li>
  <li >Giới tính :'.$item['student_gender'].'</li>
  <li >Địa chỉ :'.$item['student_address'].'</li>
</ul>';
        }
    }
     

    $_SESSION['students'] = $students;
     
    return $students;
}
 

function updateStudent($student_id, $student_name, $student_email,$student_phone,$student_gender,$student_address)
{

    $students = getAllStudents();
     

    $new_student = array(
        'student_id' => $student_id,
        'student_name' => $student_name,
        'student_email' => $student_email,
        'student_phone' => $student_phone,
        'student_gender' => $student_gender,
        'student_address' => $student_address
    );
     
     

    if (!$is_update_action){
        $students[] = $new_student;
    }
     

    $_SESSION['students'] = $students;
     
    return $students;
}



?>