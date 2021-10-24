<?php
// 文档：https://work.weixin.qq.com/api/doc/90000/90135/91022
require __DIR__ . '/common.php';

$redirect_uri = "http://qyapi.xxx.com/";
$corpid = "ww0ca05641227fc2e0"; // 企业ID，企业微信后台查看位置：我的企业-》企业信息-》企业ID

$obj = new \CjsLogin\Weixin\WxWeb();
// 拼接企业微信内oauth授权链接地址
$url = $obj->getOauth2Url($redirect_uri, "snsapi_base", "qiyeweixin01", $corpid);
echo $url . PHP_EOL;


