<?php ob_start()?><!-- 缓冲处理 -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>会员俱乐部</title>
</head>
<body>
<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
// 自动载入类
function __autoload($_className) {
 require $_className . '.class.php';
}

/**
 * 实例化主类
 */
if(isset($_GET['index'])) {
 $_main = new Main($_GET['index']);
} else {
 $_main = new Main();
}

/**
 * 载入界面
 */
 $_main->_run();

?>



</body>
</html>