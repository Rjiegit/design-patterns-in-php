<?php

final class Multition
{
    const INSTANCE_1='1';
    const INSTANCE_2='2';

    private static $instance=[];

    private function __construce()
    {
    }

    private static function getInstance(String $instanceName): Multition
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instance[$instanceName]=new self();
        }
        return self::$instance[$instanceName];
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
