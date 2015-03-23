<?php
namespace Admin\Controller;
use Think\Controller;
class LeftController extends Controller {
	public function defaultleft(){
		$this->display();
	}
    public function site(){
        $this->display();
    }
    public function shop(){
        $this->display();
    }
    public function store(){
    	$this->display();
    }
    public function member(){
    	$this->display();
    }
    public function business(){
    	$this->display();
    }
    public function manage(){
    	$this->display();
    }
    public function operate(){
    	$this->display();
    }
}