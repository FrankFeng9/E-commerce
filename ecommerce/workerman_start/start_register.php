<?php

use GatewayWorker\Register;
use Workerman\Worker;

require __DIR__ . '/../vendor/autoload.php';

new Register('text://127.0.0.1:9501');

Worker::runAll();
