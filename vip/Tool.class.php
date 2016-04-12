<?php
/**
 * 辅助工具类，存放静态方法
  2016年4月12日 下午12:18:53
  yesiming
*/
final class Tool{
 // 弹出信息，跳转到指定页面
 static public function _alertLocation($_info, $_url) {
  echo "<script type=\"text/javascript\" charset=\"utf-8\">alert('$_info');location.href='$_url'</script>";
  exit();
 }
 
 static public function _alterBack($_info) {
  echo "<script type=\"text/javascript\" charset=\"utf-8\">alert('$_info');location.back()</script>";
  exit();
 }
}