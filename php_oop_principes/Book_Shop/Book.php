<?php

class Book
{
    protected $title;
    protected $author;
    protected $price;

    public function __construct(string $author,
                                string $title,
                                float $price)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setPrice($price);
    }

    protected function setTitle(string $title)
    {
        if (strlen($title) < 3) {
            throw new Exception('Title not valid!');
        }

        $this->title = $title;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    protected function setAuthor(string $author)
    {
        $authorTokens = explode(' ',$author);

        if (preg_match('/^[0-9]+/',$authorTokens[1])) {
            throw new Exception("Author not valid!");
        }

        $this->author = $author;
    }

    public function getAuthor() : string
    {
        return $this->author;
    }

    protected function setPrice(float $price)
    {
        if ($price < 1) {
            throw new Exception("Price not valid!");
        }

        $this->price = $price;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function __toString()
    {
        return "OK".PHP_EOL.$this->getPrice();
    }
}