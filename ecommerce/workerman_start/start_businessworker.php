<?php

use GatewayWorker\BusinessWorker;
use App\GatewayWorker\Events;
use Workerman\Worker;

require __DIR__ . '/../vendor/autoload.php';

$work = new BusinessWorker();
$work->name = 'BusinessWorker';#设置BusinessWorker进程的名称
$work->count = 2;#设置BusinessWorker进程的数量
$work->registerAddress = '127.0.0.1:9501';#注册服务地址
$work->eventHandler = Events::class;#设置使用哪个类来处理业务,业务类至少要实现onMessage静态方法，onConnect和onClose静

Worker::runAll();
