<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

class BlogRenderer
{
    /**
     * @param Blog $blog
     */
    public function render(Blog $blog)
    {
        echo $blog->getName() . ' von ' . $blog->getOwner()->getEmail() . PHP_EOL;
    }
}