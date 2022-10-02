<?php

namespace App\Controller\Structural\Bridge;

class Remote
{
    public function __construct(protected Device $device) { }


    public function setDevice(Device $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeDown()
    {
        $this->device->setVolume($this->device->getVolume() - 10);
    }

    public function volumeUp()
    {
        $this->device->setVolume($this->device->getVolume() + 10);
    }

    public function channelDown()
    {
        $this->device->setVolume($this->device->getChannel() - 1);
    }

    public function channelUp()
    {
        $this->device->setVolume($this->device->getChannel() + 1);
    }

    public function getType()
    {
        return $this->device->getType();
    }

}