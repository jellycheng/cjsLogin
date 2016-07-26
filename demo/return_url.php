<?php
/* * 
 * 功能：支付宝页面跳转同步通知页面  client-client
 * 版本：3.3
 * 日期：2012-07-23
 */
require __DIR__ . '/../vendor/autoload.php';
$zfbConfig = include \CjsLogin\getZfbPath() . '/Config/alipay.config.php';
$zfbConfig = array_merge($zfbConfig, include __DIR__ . '/zfb_login.config.php');

?>
<!DOCTYPE HTML>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
//计算得出通知验证结果
$alipayNotify = new \CjsLogin\Zfb\AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代码
	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

	//支付宝用户号
	$user_id = $_GET['user_id'];

	//授权令牌
	$token = $_GET['token'];


	//判断是否在商户网站中已经做过了这次通知返回的处理
		//如果没有做过处理，那么执行商户的业务程序
		//如果有做过处理，那么不执行商户的业务程序
		
	echo "验证成功<br />";

	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    //如要调试，请看alipay_notify.php页面的verifyReturn函数
    echo "验证失败";
}
?>
        <title>支付宝快捷登录接口</title>
	</head>
    <body>
    </body>
</html>