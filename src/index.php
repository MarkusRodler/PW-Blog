<?php
declare(strict_types = 1);

namespace Dark\PW\Blog;

require '../vendor/autoload.php';

//function __autoload($class)
//{
//	require __DIR__ . '\\' . $class . '.php';
//}
$author = new User('markus.rodler');
$blog = new Blog('My beautiful Blog', $author);
for ($i = 0; $i < 10; $i++) {
	$blog->addArticle(
			new Article(
					'My Headline' . $i,
					'My Body' . $i,
					[new Tag('First Tag'), new Tag('Second Tag')],
					$author
			),
			$author
	);
}

$blogRenderer = new BlogRenderer();
$blogRenderer->render($blog);

$tagRenderer = new TagRenderer();
$articles = $blog->getArticles();
$articleRenderer = new ArticleRenderer();
foreach ($articles as $article) {
	$articleRenderer->render($article);
	foreach ($article->getTags() as $tag) {
		$tagRenderer->render($tag);
	}
}