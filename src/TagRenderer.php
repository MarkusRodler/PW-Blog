<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

class TagRenderer
{
	/**
	 * @param Tag $tag
	 */
	public function render(Tag $tag)
	{
		echo PHP_EOL . 'Tags: ' . $tag->getName();
	}
}