<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

class Tag
{
    /**
     *
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    function getName() : \string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function __construct(\string $name)
    {
        $this->name = $name;
    }
}