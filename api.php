<?php
require './lib/PHPFetion.php';
$phone = $_GET["phone"];
$pwd = $_GET["pwd"];
$to = $_GET["to"];
$msg = $_GET["msg"];

$fetion = new PHPFetion('$phone', '$pwd');	// 手机号、飞信密码
$fetion->send('$to', '$msg');	// 接收人手机号、飞信内容
