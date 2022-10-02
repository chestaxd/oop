<?php

namespace App\Tests\Structural;

use App\Controller\Structural\Adapter\EBookAdapter;
use App\Controller\Structural\Adapter\Kindle;
use App\Controller\Structural\Adapter\PaperBook;
use PHPUnit\Framework\TestCase;


class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}