<?php 

$mod = isset($_GET['mod'])?$_GET['mod']:'';//model đối tượng
$act = isset($_GET['act'])?$_GET['act']:'';//action hành động

switch ($mod) {
	case 'product':
	require_once("controllers/ProductController.php");
	$product= new ProductController;
		switch ($act) {
			case 'list':
				$product->list();
				break;
				case 'detail':
				$product->detail();
				break;
				case 'add':
				$product->add();
				break;
				case 'store':
				$product->store();
				break;

				case 'edit':
				$product->edit();
				break;
				case 'update':
				$product->update();
				break;

				case 'delete':
				$product->delete();
				break;

			
			default:
				echo 'không có chức năng này<br>';
				break;
		}
		break;


		case 'employee':
	require_once("controllers/EmployeeController.php");
	$employee= new EmployeeController;
		switch ($act) {
			case 'list':
				$employee->list();
				break;
				
				case 'detail':
				$employee->detail();
				break;
				
			
			default:
				echo 'không có chức năng này<br>';
				break;
		}
		break;

		case 'customer':
	require_once("controllers/CustomerController.php");
	$customer= new CustomerController;
		switch ($act) {
			case 'list':
				$customer->list();
				break;
				case 'detail':
				$customer->detail();
				break;
				case 'add':
				$customer->add();
				break;
				case 'store':
				$customer->store();
				break;

				case 'edit':
				$customer->edit();
				break;
				case 'update':
				$customer->update();
				break;
				case 'delete':
				$customer->delete();
				break;

				

			
			default:
				echo 'không có chức năng này<br>';
				break;
		}
		break;
	
	default:
		echo 'không có module này<br>';
		break;
}
 ?>