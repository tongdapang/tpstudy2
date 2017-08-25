<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function login(){
		$this->display();
	}

	public function _empty(){
		echo '非法操作';
	}

	public function test(){
		// $obj = new ManagerController();
		// $obj->managertest();
		
		// $obj = A('Manager');
		// $obj->managertest();
			
		R('Manager/managertest');


	}

	public function test1(){
		echo C('name');
	}
}