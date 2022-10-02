<?php

namespace App\Tests\Structural;

use App\Controller\Structural\Bridge\Radio;
use App\Controller\Structural\Bridge\Remote;
use App\Controller\Structural\Bridge\TV;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testUsingTV()
    {
        $tvDevice = new TV();
        $radioDevice = new Radio();
        $remote = new Remote($tvDevice);
        $this->assertSame('TV', $remote->getType());
        $remote->setDevice($radioDevice);
        $this->assertSame('Radio', $remote->getType());
    }

}