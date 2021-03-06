<?php
/**
 * Main Script of phpWebSockets
 *
 * Run this file in a shell or windows cmd to start the socket server.
 * Sorry for calling this daemon but the goal is that this server run
 * as daemon in near future.
 *
 * @author Moritz Wutz <moritzwutz@gmail.com>
 * @version 0.1
 * @package phpWebSockets
 */

ob_implicit_flush(true);

require 'socket.class.php';
require 'socketWebSocket.class.php';
require 'socketWebSocketTrigger.class.php';

$ip = exec ("ifconfig|grep 'inet:'|grep -v '127.0.0.1' |cut -d: -f2 |awk '{ print $1}'");
$WebSocket = new socketWebSocket($ip,8000);

?>
