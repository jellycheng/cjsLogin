<?php
/**
 * 微信小程序登录
 */
require __DIR__ . '/common.php';
$wxConfig = include __DIR__ . '/config/weixinxcx.php';

$appid = isset($_GET['appid'])?$_GET['appid']:'';
$appsecret = isset($wxConfig[$appid])?$wxConfig[$appid]:'';
$code = isset($_GET['code'])?$_GET['code']:'';
$cxcParam = [
                'appid'=>$appid,     //小程序的 app id
                'appsecret'=>$appsecret,//小程序的 app secret
                'code'=>$code,  //登录时获取的 code,一个code只能验证一次
            ];
$xcxInfo = \CjsLogin\Xcx\WeixinXcx::jscode2session($cxcParam);
if($xcxInfo) {
	$xcxInfoAry = json_decode($xcxInfo, true);
	$openid = isset($xcxInfoAry['openid'])?$xcxInfoAry['openid']:"";
	if(!$openid) {
		//登录失败
	}
	//登录成功
	var_export($xcxInfo);
	$session_key = isset($xcxInfo['session_key'])?$xcxInfo['session_key']:'';
	echo $session_key . PHP_EOL;
} else {
	//登录失败
}


