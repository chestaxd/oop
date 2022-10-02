<?php

namespace App\Controller\Structural\Bridge;

class AdvancedRemote extends Remote
{
    public function mute()
    {
        $this->device->setVolume(0);
    }

}