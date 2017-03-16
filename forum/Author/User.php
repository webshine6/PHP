<?php

namespace Author;

use Content\Answer;
use Content\Question;

class User
{
    private static $lastId;

    private $id;
    private $username;
    private $password;

    /**
     * зададени въпроси
     *
     * @var Question[]
     */
    private $questions = [];

    /**
     * отговори
     *
     * @var Answer[]
     */
    private $answers = [];

    /**
     * коментари
     *
     * @var Answer[]
     */
    private $comments = [];


    public function __construct(string $username,
                                string $password)
    {
        $this->id = ++self::$lastId;
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function setPassword($password)
    {
        if (!preg_match('/[0-9]+/',$password)) {
            throw new \Exception("Password should contain digits.");
        }


        if (!preg_match('/[a-z]+/', $password)) {
            throw new \Exception("Password should contain letter.");
        }

        $this->password = $password;
    }


    public function getQuestions()
    {
        return $this->questions;
    }


    public function askQuestion(Question $question)
    {
       $this->questions[] = $question;
    }


    public function getAnswers()
    {
        return $this->answers;
    }


    public function answer(Question $question,
                           Answer $answer)
    {
        $this->answers[] = $answer;
        $question->answer($answer);
    }


    public function getComments()
    {
        return $this->comments;
    }

    public function comment(Answer $answer, Answer $comment)
    {
        $this->comments[] = $comment;
        $answer->comment($comment);
    }

}