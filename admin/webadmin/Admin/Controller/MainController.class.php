<?php
namespace Admin\Controller;
use Think\Controller;
class MainController extends Controller {
	public function top(){
		$this->display();
	}
	public function left(){
		$this->display();
	}
	public function left2(){
		$this->display();
	}
	public function index(){
		$this->display();
	}
    public function main(){
    	$sitename=C('sitename');
        $this->assign("sitename",$sitename);
        $this->display();
    }
}