<?php
namespace app\test\controller;
use think\Controller;

class Test extends Controller{
	public function test(){
		return $this->fetch();

	}
}