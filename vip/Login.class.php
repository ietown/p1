<?php
/**
 2016年4月11日 下午5:49:54
 yesiming
 */
class Login extends User {
 public function __construct($_userName, $_password) {
  $this->_userName = $_userName;
  $this->_password = $_password;
 }
 public function _query() {
  
  // 载入xml
  $_sxe = simplexml_load_file ( 'user.xml' );
  
  if ($this->_userName == $_sxe->username && $this->_password == $_sxe->password) {
   echo '登录成功';
   // 生成cookie
   setcookie('user', $this->_userName);
   // 跳转到登录完成后的页面
   Tool::_alertLocation ("登录成功","?index=member");
  } else {
   Tool::_alterBack("登录失败");
  }
 }
 public function _check() {
 }
}