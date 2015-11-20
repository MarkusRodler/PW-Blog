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
	function getEmail()
	{
		return $this->email;
	}

	/**
	 * @todo: Email abändern in Typ Email anstatt string oder emailvalidierung
	 * @param string $email
	 */
	public function __construct(string $email)
	{
		$this->email = $email;
	}
}