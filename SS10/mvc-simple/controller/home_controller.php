<?php
require_once 'config/database.php';
require_once 'model/user_model.php';
class HomeController {
	public function redirect($location) {
      header('Location: '.$location);
    }
	public function controlAction(){
		$action = isset($_GET['action'])?$_GET['action']:NULL;
		if($action == NULL){
			$this -> callFirstView();
		}elseif($action == 'view'){
			$this -> callSecondView();
		}elseif($action == 'delete'){
			$this -> DeleteUser();
		}elseif($action == 'add'){
			$this -> AddUser();
		}

		
	}

	public function callFirstView(){
		//echo "Model hay xu ly cho toi";
		// goi ham lay thong tin tat ca user ra - bat thang model xu ly
		$user = new UserModel();
		$listUsers = $user->getListUser();



		include 'view/user/list_user.php';
	}
	public function callSecondView(){
		//echo "123";
		$id = isset($_GET['id'])?$_GET['id']:NULL;
		$user = new UserModel();
		$view =$user->viewUser($id);

		include 'view/user/view_user.php';

	}
	 public function DeleteUser(){
	 	$id = isset($_GET['id'])?$_GET['id']:NULL;
		$user = new UserModel();
		$user ->delUser($id);
		$this->redirect('index.php');
	 }
	  public function AddUser(){
	 	$title = 'Add new user';
        
        $name = '';
        $phone = '';
        $email = '';
        $address = '';
       
        $errors = array();
        
        if ( isset($_POST['form-submitted']) ) {
            
            $name       = isset($_POST['name']) ?   $_POST['name']  :NULL;
            $phone      = isset($_POST['phone'])?   $_POST['phone'] :NULL;
            $email      = isset($_POST['email'])?   $_POST['email'] :NULL;
            $address    = isset($_POST['address'])? $_POST['address']:NULL;
		$user = new UserModel();
		$user ->AddUser($name, $phone, $email, $address);
		
		$this->redirect('index.php');
	
        }
		 include 'view/user/add_user.php';
	 }
}