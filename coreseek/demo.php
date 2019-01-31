<?php
require "sphinxapi.php";

$cl = new SphinxClient();
$cl->SetServer('127.0.0.1', 9312);
$cl->SetConnectTimeout(3);
$cl->SetArrayResult(true);
$cl->SetMatchMode(SPH_MATCH_ANY);
$res = $cl->Query('学习', "*");
print_r($res);