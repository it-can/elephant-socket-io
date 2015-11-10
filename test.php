<?php
require __DIR__ . '/vendor/autoload.php';

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X;


$client = new Client(new Version1X('http://127.0.0.1:9001'));
$client->initialize();
$client->emit('broadcast', ['foo' => 'bar']);
$client->close();
