<?php

use GatewayWorker\Gateway;
use Workerman\Worker;

require __DIR__ . '/../vendor/autoload.php';

$gateway = new Gateway("websocket://0.0.0.0:9502");
$gateway->name = 'Gateway';#设置Gateway进程的名称，方便status命令中查看统计
$gateway->count = 2;#进程的数量
$gateway->lanIp = '127.0.0.1';#内网ip,多服务器分布式部署的时候需要填写真实的内网ip
$gateway->startPort = 9000;#监听本机端口的起始端口
$gateway->pingInterval = 30;
$gateway->pingNotResponseLimit = 0;#服务端主动发送心跳
$gateway->pingData = '{"mode":"heart"}';
$gateway->registerAddress = '127.0.0.1:9501';#注册服务地址

Worker::runAll();
