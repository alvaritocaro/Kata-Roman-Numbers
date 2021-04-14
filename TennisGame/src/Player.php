<?php


namespace Deg540\PHPTestingBoilerplate;


class Player
{
    private $punctuation;
    private $name;

    /**
     * @return mixed
     */
    public function getPunctuation()
    {
        return $this->punctuation;
    }

    /**
     * @param mixed $punctuation
     */
    public function setPunctuation($punctuation): void
    {
        $this->punctuation = $punctuation;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }



}