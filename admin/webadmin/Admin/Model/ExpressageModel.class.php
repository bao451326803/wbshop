<?php
namespace Admin\Model;
use Think\Model;
class ExpressageModel extends Model{
    protected $_validate = array(
        array('exname','require','快递名称不可为空！',1),
    );
}
?>