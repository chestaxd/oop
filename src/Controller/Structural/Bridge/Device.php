<?php

namespace App\Controller\Structural\Bridge;

abstract class Device
{
    private $volume = 0;
    private $status = self::OFF;
    private $channel;
    const ON = 1;
    const OFF = 2;

    public function isEnabled()
    {
        return $this->status == self::ON;
    }

    public function enable()
    {
        $this->status = self::ON;
    }

    public function disable()
    {
        $this->status = self::OFF;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($percent)
    {
        $this->volume = $percent;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    abstract public function getType();

}