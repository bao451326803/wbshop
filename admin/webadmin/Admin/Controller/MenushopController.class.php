<?php
namespace Admin\Controller;
use Think\Controller;
class MenushopController extends Controller {

    protected $brands_table;
    protected $classify_table;

    public  function _initialize(){

        $this->brands_table=M("brands");
        $this->classify_table = M("classify");
    }

    /*
     * 品牌添加模板
     */
    public  function bradd(){

        $this->display();
    }
    /*
     * 处理提交品牌添加数据
     */
    public function  bradd_data(){
        $jump_url = U("Menushop/brands");
        if(IS_POST){
            $rules = array(
                           array('brname','require','品牌名称不可为空！'),
                           array('brimg','require','LOGO不可为空！'),
                          );
            if (!$this->brands_table->validate($rules)->create()){
                $this->error($this->brands_table->getError());
            }else{
                $this->brands_table->date = time();
                if($this->brands_table->add()){
                    $this->success("添加成功",$jump_url);
                }else{
                    $this->error("添加失败");
                }
            }
        }else{
            $this->error("非法请求数据");
        }
    }
    /*
     * 品牌列表
     */
    public function brands(){
        $count = $this->brands_table->count();
        $Page = new \Think\Page($count,12);
        $show = $Page->show();
        $select_brands = $this->brands_table->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("select_brands",$select_brands);
        $this->assign('page',$show);
        $this->display();
    }
    /*
     * 删除品牌
     */
    public function brdel(){
        $id=I('get.id');
        $where_del['id'] = $id;
        if($this->brands_table->where($where_del)->delete()){
           $this->success("删除成功");
        }else{
           $this->error("删除失败");
        }
    }
    /*
     * 分类管理模板
     */
	public function classify(){
        $select_classify = $this->classify_table->field("id, cid,clname, is_hasChlid")->select();
        $treeObj = new \Lib\Tree();//引用Tree类
        $tree_classify = $treeObj->getTree($select_classify,$pid = 0, $col_id = 'id', $col_pid = 'cid', $col_cid = 'is_hasChlid');
        $this->assign("select_classify",$tree_classify);
        $this->display();
	}
    /*
     * 添加分类模板
     */
    public function cladd(){
        $select_classify = $this->classify_table->field("id, cid,clname, is_hasChlid")->select();
        $treeObj = new \Lib\Tree();//引用Tree类
        $tree_classify = $treeObj->getTree($select_classify,$pid = 0, $col_id = 'id', $col_pid = 'cid', $col_cid = 'is_hasChlid');
        $this->assign("select_classify",$tree_classify);
        $this->display();
    }
    /*
     * 处理添加分类数据
     */
    public function cladd_data(){
           $jump_url = U("Menushop/classify");
           if(IS_POST){
               $rules = array(
                   array('clname','require','分类名称不可为空！'),
               );
               if(!$this->classify_table->validate($rules)->create()){
                   $this->error($this->classify_table->getError());
               }else{
                   $this->classify_table->date = time();
                   $save_data['id'] = I("post.cid");
                   $save_data['is_hasChlid'] = 1;
                   /*
                    * 添加分类并更改上级分类状态
                    */
                   $this->classify_table->add();
                   $this->classify_table->save($save_data);
                   $this->success("添加成功",$jump_url);

               }
           }else{
               $this->error("非法提交数据");
           }
    }
    /*
     * 删除分类
     */
    public function cldel(){
        $jump_url = U("Menushop/classify");
        $id= I("get.id");
        $is_del = $this->is_del_classify($id);  //是否可以删除判断
        if($is_del){
            //返回删除状态码
            $return_code = $this->del_classify($is_del);
            if($return_code == "1" or $return_code == "4"){
                $this->success("删除成功",$jump_url);
            }else{
                $this->error("删除失败错误代码为awb12011319".$return_code."",$jump_url);
            }
        }else{
            $this->error("存在上级分类不可删除",$jump_url);
        }

    }
	public function shop(){
	    $this->display();	
	}
	public function type(){
		$this->display();
	}
	public function specifications(){
		$this->display();
	}
    /*****************调用函数***********************/
    /*
     * 是否可以删除分类
     */
    protected  function is_del_classify($id){
        $where_classify['id'] = $id;
        $where_classify['is_hasChlid'] = 0;
        $select_classify = $this->classify_table->where($where_classify)->field("id,cid")->find();
        if(empty($select_classify)){
            return false;
        }else{
            return $select_classify;
        }
    }
    /*
     * 删除分类
     * 1 : 有同级子类并且删除成功
     * 2 : 有同级子类并且删除失败
     * 3 : 更改父类状态失败
     * 4 : 更改父类状态成功，并删除子类
     * 5 : 更改父类状态成功，但并未删除子类
     *
     */
    protected  function del_classify($array){
        //查询是否有同级分类
        $where_classify['cid'] = $array['cid'];
        $count_classify = $this->classify_table->where($where_classify)->count();
        if($count_classify>1){
            //有同级子类直接删除，无需更改父类状态
            if($this->classify_table->where($array)->delete()){
                $return_data = "1";
            }else{
                $return_data = "2";
            }
        }else{
            //无同级子类，先更改父类状态后删除子类
            $save_data['is_hasChlid'] = 0;
            if($this->classify_table->where(array("id"=>$array['cid']))->save($save_data)){
                if($this->classify_table->where($array)->delete()){
                    $return_data = "4";
                }else{
                    $return_data = "5";
                }
            }else{
                $return_data = "3";
            }
        }
        return $return_data;
    }
    
}