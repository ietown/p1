<?php
/**
  2016年4月11日 下午5:28:44
  yesiming
*/
class Main{
 private $_index;
 private $_send;
 
 public function __construct($_index = ""){
  $this->_index = $_index;
  if(isset($_POST['send'])) {
   $this->_send = $_POST['send'];
  }
  
 }
 
 // 总管
 public function _run() {
  echo $this->_send();
  include $this->_ui();
 }
 
 /**
  * 创建一个载入界面的方法
  * 这个方法得到login.inc.php这个字符串
  */
 private function _ui() {
  if(empty($this->_index)) {
   $this->_index = 'start';
  } else if(!file_exists($this->_index.'.inc.php')) {
   $this->_index = 'start';
  }
  
  return $this->_index.'.inc.php';
 }
 
 /**
  * 接收登录，注册操作
  */
 private function _send(){
  //return $this->_send;
  switch ($this->_send){
   case '注册':
    $this->_exec(new Reg($_POST['username'], $_POST['password'], $_POST['email']));
    break;
   case '登录':
    $this->_exec(new Login($_POST['username'], $_POST['password']));
    break;
   default:
  }
 }
 
 // 创建一个执行方法，里面传入一个参数，是Reg或者Login类的对象引用
 private function _exec($_class) {
  $_class->_query();
 }
}