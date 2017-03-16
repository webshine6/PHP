<?php

namespace Content;

use Author\User;

class Answer
{
    private const BODY_MIN_LENGTH = 7;


    private static $lastId;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var User
     */
    private $author;

    /**
     * @var Question
     */
    private $question;

    /**
     * @var Answer
     */
    private $answer;

    /**
     *
     * @var Answer[]
     */
    private $comments = [];


    public function __construct(string $body,
                                User $author,
                                Question $question,
                                Answer $answer = null)
    {
        $this->id = ++self::$lastId;

        $this->setBody($body);
        $this->setAuthor($author);
        $this->setQuestion($question);
        $this->setAnswer($answer);
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @throws \Exception
     */
    public function setBody(string $body)
    {
        if (strlen($body) < self::BODY_MIN_LENGTH) {
            throw new \Exception("Body too short");
        }

        $this->body = $body;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor(User $author)
    {
        $this->author = $author;
    }

    /**
     * @return Question
     */
    public function getQuestion(): Question
    {
        return $this->question;
    }

    /**
     * @param Question $question
     */
    public function setQuestion(Question $question)
    {
        $this->question = $question;
    }

    /**
     * @return Answer
     */
    public function getAnswer(): Answer
    {
        return $this->answer;
    }

    /**
     * @param Answer $answer
     */
    public function setAnswer(Answer $answer = null)
    {
        $this->answer = $answer;
    }

    /**
     * коментари за съответния отговор
     * @param Answer $answer
     */
    public function comment(Answer $answer)
    {
        $this->comments[] = $answer;
    }


    /**
     * @return Answer[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }

}