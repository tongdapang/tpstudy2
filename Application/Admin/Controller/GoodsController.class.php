<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {

	public function showlist(){
		$list = M('goods')->group('goods_brand_id')->field('goods_brand_id,max(goods_price) m')->having('m>3000')->select();
		echo '<pre>';
		var_dump($list);
		die;
		$this->assign('list',$list);
		$this->display();
	}

	public function test(){
		echo __MODULE__;
	}

	public function test1(){
		$goods = M('goods')->getbygoods_id(9);
		var_dump($goods);
	}

	public function test2(){
		echo C('DB_PWD','123').'<br/>';
		$goods = M('goods');
		echo $goods->count().'<br/>';
		echo $goods->max('goods_price').'<br/>';
		echo $goods->min('goods_price').'<br/>';
	}

	public function test3(){
		var_dump(C('cur_model'));
	}
}