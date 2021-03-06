<?php

namespace Content;

use Author\User;

class Question
{
    private const TITLE_MIN_LENGTH = 3;
    private const BODY_MIN_LENGTH  = 5;

    private static $lastId;

    private $id;
    private $title;
    private $body;
    private $author;

    /**
     * @var Answer[]
     */
    private $answers = [];

    public function __construct(string $title,
                                string $body,
                                User $author)
    {
        $this->id = ++self::$lastId;
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setBody($body);
    }

    public function setTitle(string $title)
    {
        if (strlen($title) < self::TITLE_MIN_LENGTH) {
            throw new \Exception("Title too short.");
        }

        $this->title = $title;
    }

    public function setBody(string $body)
    {
        if (strlen($body) < self::BODY_MIN_LENGTH) {
            throw new \Exception("Body too short");
        }

        $this->body = $body;
    }



    public function getTitle() : string
    {
        return $this->title;
    }

    public function getBody() : string
    {
        return $this->body;
    }

    public function setAuthor(User $author)
    {
        $this->author = $author;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getAnswers()
    {
        return $this->answers;
    }

    public function answer(Answer $answer)
    {
        $this->answers[] = $answer;
    }

}