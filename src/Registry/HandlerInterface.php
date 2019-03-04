<?php

namespace Mix\WebSocket\Registry;

/**
 * Interface HandlerInterface
 * @package Mix\WebSocket\Registry
 * @author LIUJIAN <coder.keda@gmail.com>
 */
interface HandlerInterface
{

    /**
     * 处理消息
     * @return void
     */
    public function open();

    /**
     * 处理消息
     * @return void
     */
    public function message(\Swoole\WebSocket\Frame $frame);

    /**
     * 连接关闭
     * @return void
     */
    public function close();

}
