<?php
/**
  2016年4月11日 下午5:49:40
  yesiming
*/
class Reg extends User{
 
 public function __construct($_userName, $_password, $_email){
  $this->_userName = $_userName;
  $this->_password = $_password;
  $this->_email = $_email;
 }
 
 // 将数据注册到xml里
 public function _query(){
  
  $_xml = <<<_xml
<?xml version="1.0" encoding="UTF-8"?>
<user>
 <username>$this->_userName</username>
 <password>$this->_password</password>
 <email>$this->_email</email>
</user>
_xml;
  
 $_sxe = new SimpleXMLElement($_xml);
 $_sxe->asXML('user.xml');
 // 跳转到注册完成后的页面
 Tool::_alertLocation("注册成功", "?index=member");
 }
 
 // 
 public function _check(){
  if(empty($this->_userName) || empty($this->_password) || empty($this->_email)) {
   return false;
  }
 }
}