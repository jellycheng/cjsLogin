<?php
namespace CjsLogin\QiyeWeixin;

class UserInfo
{
    /**
     * 根据code获取成员信息,即企业用户信息
     * @param $access_token
     * @param $code
     * @return array
     * {
        "errcode": 0,
        "errmsg": "ok",
        "UserId":"用户ID",
        "DeviceId":"手机设备号"
        }
     */
    public static function getInfo($access_token, $code) {
        $resData = [];
        $url = sprintf('https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token=%s&code=%s',
            $access_token, $code
        );
        $content = file_get_contents($url);
        if($tmp = json_decode($content, true)){
            $resData = $tmp;
        }
        return $resData;
    }

}