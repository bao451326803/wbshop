<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $sitename=C('sitename');
        $this->assign("sitename",$sitename);
        $this->display();
    }
}