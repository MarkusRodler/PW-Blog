<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

class Article
{
	/**
	 * @var string
	 */
	private $headline;

	/**
	 * @var string
	 */
	private $body;

	/**
	 * @var array
	 */
	private $tags = [];

	/**
	 * @var User
	 */
	private $author;

	/**
	 * @return string
	 */
	function getHeadline()
	{
		return $this->headline;
	}

	/**
	 * @return string
	 */
	function getBody()
	{
		return $this->headline;
	}

	/**
	 * @return array
	 */
	function getTags()
	{
		return $this->tags;
	}

	/**
	 * @return User
	 */
	function getAuthor()
	{
		return $this->author;
	}

	/**
	 * @param string $headline
	 * @param string $body
	 * @param array $tags
	 * @param User $author
	 */
	public function __construct(\string $headline, \string $body, array $tags, User $author)
	{
		$this->headline = $headline;
		$this->body = $body;
		$this->tags = $tags;
		$this->author = $author;
	}
}