<?php
namespace CjsLogin\QiyeWeixin;

class Qr
{

    // 获取扫码登录链接：https://work.weixin.qq.com/api/doc/90000/90135/91019
    public static function getUrl($corpid, $agentid, $redirect_uri, $state="") {
        $urlFormat = "https://open.work.weixin.qq.com/wwopen/sso/qrConnect?appid=%s&agentid=%s&redirect_uri=%s&state=%s";
        if(!$state) {
            $state = \CjsLogin\randStr(4);
        }
        $url = sprintf($urlFormat, $corpid,$agentid,urlencode($redirect_uri),$state);
        return $url;
    }

}