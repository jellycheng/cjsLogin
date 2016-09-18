<?php
/**
 * Created by PhpStorm.
 * User: jelly
 * Date: 16/9/18
 * Time: 下午3:23
 */
require __DIR__ . '/../vendor/autoload.php';
$wxConfig = include __DIR__ . '/config/WxH5.php';

$redirectUrl = 'http://xxx.com/wx_callback.php';
$url = \CjsLogin\Weixin\WxWeb::create()->setWxConfig($wxConfig)->getOauth2Url($redirectUrl, 'snsapi_userinfo');
header("Location: " . $url);

