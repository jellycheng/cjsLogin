<?php
require __DIR__ . '/common.php';

$corpid = "ww0ca05641227fc2e0"; // 企业ID，企业微信后台查看位置：我的企业-》企业信息-》企业ID
$corpsecret = "xxx"; // 某个应用的密钥
// 获取企业微信访问令牌
$res = \CjsLogin\QiyeWeixin\AccessToken::get($corpid, $corpsecret);
var_export($res);
echo PHP_EOL;

// 获取用户信息
$access_token = isset($res["access_token"])?$res["access_token"]:"";
$code = "QsO7gK4PijCa6haRb5ulUOLgrfInjAiLtcvqHNglPwo";
$res2 = \CjsLogin\QiyeWeixin\UserInfo::getInfo($access_token, $code);
/**
array (
    'UserId' => 'ChengJinSheng',
    'DeviceId' => '',
    'errcode' => 0,
    'errmsg' => 'ok',
)
 */
var_export($res2);
echo PHP_EOL;
