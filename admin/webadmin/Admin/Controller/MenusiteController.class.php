<?php
namespace Admin\Controller;
use Think\Controller;
class MenusiteController extends Controller {

    protected  $config_table;
    protected  $seo_table;
    protected  $express_table;
    protected  $hostwords_table;

    public function _initialize(){
        $this->config_table = D("config");
        $this->seo_table = M("seo");
        $this->express_table = D("expressage");
        $this->hostwords_table =M("hostwords");
    }

    /*
     * 站点设置模板数据
     */
	public function website(){
        $config = $this->config_table->find(1);
        $this->assign("config", $config);
	    $this->display();
	}

    /*
     * 站点设置数据处理
     */
    public function set_website(){
        $config = $this->config_table;
        // 创建数据对象
        if (!$config->create()){
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->error($config->getError());
        }else{
            if($config->save()){
                $this->success("更新成功");
            }else{
                $this->error("更新失败");
            }
        }




    }
    /*
     * seo信息显示
     */
	public function seo(){
        $seo_mes = $this->seo_table->select();
        $this->assign("seo_mes",$seo_mes);
		$this->display();
	}
    /*
     * seo信息处理
     */
    public function set_seo(){
        if(IS_POST){
            //处理提交数据键名
            $array_seo = $this->seo_array($_POST);
            //批量保存
            foreach($array_seo as $k=>$v){
                if($save_seo = $this->seo_table->save($array_seo[$k])){
                   $check_seo[] =$save_seo;
                }
            }
            $this->success("更新成功");
        }else{
            $this->error("异常提交");
        }
    }
	public function payment(){
		$this->display();
	}
	public function rbac(){
		$this->display();
	}
    /*
     * 快递公司显示
     */
	public function expressage(){
        $select_expressage = $this->express_table->select();
		$this->assign("select_expressage",$select_expressage);
        $this->display();
    }
    /*
     * 快递公司删除
     */
    public function exdel(){
        $id = I("get.id");
        if($this->express_table->delete($id)){
            $this->success("删除成功！");
        }else{
            $this->error("删除失败！");
        }
    }
    /*
     * 快递公司添加
     */
    public function exadd(){
           if(IS_POST){
               //创建数据
               if(!$this->express_table->create($_POST,1)){
                   $this->error($this->express_table->getError());
               }else{
                  if($this->express_table->add()){
                      $this->success("添加成功");
                  }else{
                      $this->error("添加失败");
                  }
               }
           }else{
               $this->error("非法请求数据");
           }
    }
    /*
     * 搜索显示
     */
	public function search(){
		$this->display();
	}
    /*
     * 搜索添加
     */
    public function seradd(){
      if(IS_POST){
        $hotwords = I('post.hotwords');
        $insert_data = $this->hotwords_array($hotwords);
        if($this->hostwords_table->addAll($insert_data)){
           $this->success("添加成功");
        }else{
           $this->error("添加失败");
        }
      }else{
        $this->error("非法数据提交");
      }
    }

    /**************************调用函数*******************************/


    /*seo数据重装*/
    public function seo_array($array){
        $count = count($array);
        for($i=0; $i<$count; $i++){
            $array_k = 'seo_'.$i;
            $array[$i]['id'] = $array[$array_k][0];
            $array[$i]['title'] = $array[$array_k][1];
            $array[$i]['keywords'] = $array[$array_k][2];
            $array[$i]['description'] = $array[$array_k][3];
            unset($array[$array_k]);
        }
        return($array);
    }
    /*搜索关键词数据重组*/
    function hotwords_array($array){
        $insert_data = explode("|",$array);
        $count = count($insert_data);
        $nowtime = time();
        for($i=0;$i<$count;$i++){
            $return_data[$i]['hotwords'] = $insert_data[$i];
            $return_data[$i]['date'] = $nowtime;
        }
        return($return_data);
    }
}