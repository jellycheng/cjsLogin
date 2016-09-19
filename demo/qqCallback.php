<?php
require __DIR__ . '/common.php';

$qc = new \CjsLogin\QQ\QC();
echo $qc->qq_callback();
echo $qc->get_openid();
//$ret = $qc->get_info();
//$arr = $qc->get_user_info();