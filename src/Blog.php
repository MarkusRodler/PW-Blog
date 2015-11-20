<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

class Blog
{
	/**
	 *
	 * @var string
	 */
	private $name;

	/**
	 * @var Article[]
	 */
	private $articles = [];

	/**
	 * @var User
	 */
	private $owner;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return User
	 */
	public function getOwner()
	{
		return $this->owner;
	}

	/**
	 * @return Article[]
	 */
	public function getArticles()
	{
		return $this->articles;
	}

	/**
	 * @param Article $article
	 * @throws Exception
	 */
	public function addArticle(Article $article)
	{
		if ($article->getAuthor() !== $this->owner) {
			throw new Exception('Author has no authorization to publish to this Blog');
		}

		$this->articles[] = $article;
	}

	/**
	 * @param string $name
	 * @param User $owner
	 */
	public function __construct(\string $name, User $owner)
	{
		$this->name = $name;
		$this->owner = $owner;
	}
}