<?php

namespace App\Tests\Structural;

use App\Controller\Structural\Decorator\InputFormat;
use App\Controller\Structural\Decorator\PlainTextFilter;
use App\Controller\Structural\Decorator\TextInput;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $dangerousComment = <<<HERE
Hello! Nice blog post!
Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
<script src="http://www.iwillhackyou.com/script.js">
  performXSSAttack();
</script>
HERE;


        $naiveInput = new TextInput();
        $filteredInput = new PlainTextFilter($naiveInput);
        $output = $filteredInput->formatText($dangerousComment);
        $this->assertSame(strip_tags($dangerousComment), $output);
    }

}