<?php
// 拼接企业微信扫一扫登录地址
require __DIR__ . '/common.php';

$corpid ="ww0ca05641227fc2e0"; // 企业ID
$agentid = "1000006";  // 应用ID
$redirect_uri = "http://qyapi.5ecms.com"; //扫码成功回调地址,成功之后追加了新参数之后的示例 http://qyapi.5ecms.com/?code=QsO7gK4PijCa6haRb5ulUOLgrfInjAiLtcvqHNglPwo&state=DImc&appid=ww0ca05641227fc2e0
$url = \CjsLogin\QiyeWeixin\Qr::getUrl($corpid,$agentid,$redirect_uri);
echo $url . PHP_EOL;


