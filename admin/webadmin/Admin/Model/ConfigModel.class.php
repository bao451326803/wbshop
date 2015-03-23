<?php
namespace Admin\Model;
use Think\Model;
class ConfigModel extends Model{
    protected $_validate = array(
        array('webName','require','网站名称不可为空！'),
        array('webLogo','require','网站LOGO不可为空！'),
        array('memberLogo','require','会员中心LOGO不可为空！'),
        array('businessManlogo','require','商家LOGO不可为空！'),


    );
}
?>