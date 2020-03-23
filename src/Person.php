<?php

namespace InsertIntoHTL\sql_save_load;

require_once "vendor/autoload.php";

class Person
{

    private $name;
    private $id;

    /**
     * Person constructor.
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    public function __toString()
    {
        return "<h2>" . $this->getId() . ": " . $this->getName() . "</h2>";
    }
}