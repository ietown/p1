<?php
/**
  2016年4月11日 下午5:46:47
  yesiming
*/
abstract class User{
 protected $_id;
 
 protected $_userName;
 
 protected $_password;
 
 protected $_email;
 
 abstract function _query();
 
 abstract function _check();
}