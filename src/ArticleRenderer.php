<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

class ArticleRenderer
{

    /**
     * @param Article $article
     */
    public function render(Article $article)
    {
        echo PHP_EOL . 'Article: ' . $article->getHeadline();
    }
}