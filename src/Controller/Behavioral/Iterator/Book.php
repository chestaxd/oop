<?php

namespace App\Controller\Behavioral\Iterator;

class Book
{
    public function __construct(private string $title, private string $author)
    {
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}