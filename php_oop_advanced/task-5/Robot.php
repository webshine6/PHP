<?php

require_once 'IBoarderControl.php';

class Robot implements IBoarderControl
{
    private $model;

    private $id;

    public function __construct(string $model,
                                string $id)
    {
        $this->setModel($model);
        $this->setId($id);
    }

    public function enter($input)
    {
        $tokens = explode(' ', $input);
        $model = $tokens[0];
        $id    = $tokens[1];

        $this->setModel($model);
        $this->setId($id);
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }
}