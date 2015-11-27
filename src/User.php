<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

class User
{
    /**
     * @var string
     */
    private $email;

    /**
     * @return string
     */
    function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @todo: Email abändern in Typ Email anstatt string
     * @param string $email
     */
    public function __construct(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('E-Mail is not valid');
        }
        $this->email = $email;
    }
}