<?php

namespace Mix\WebSocket\Registry;

use Mix\Http\Message\Request;
use Mix\WebSocket\Frame;
use Mix\WebSocket\WebSocketConnection;

/**
 * Interface HandlerInterface
 * @package Mix\WebSocket\Registry
 * @author LIUJIAN <coder.keda@gmail.com>
 */
interface HandlerInterface
{

    /**
     * 开启连接
     * @param WebSocketConnection $ws
     * @param Request $request
     */
    public function open(WebSocketConnection $ws, Request $request);

    /**
     * 处理消息
     * @param WebSocketConnection $ws
     * @param Frame $frame
     */
    public function message(WebSocketConnection $ws, Frame $frame);

    /**
     * 连接关闭
     * @param WebSocketConnection $ws
     */
    public function close(WebSocketConnection $ws);

}
