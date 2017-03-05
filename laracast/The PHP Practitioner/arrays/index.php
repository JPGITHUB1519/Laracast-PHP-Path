<?php

	class Post
	{
		public $title;
		public $published;
		public $author;

		public function __construct($title, $published, $author)
		{
			$this->title = $title;
			$this->published = $published;
			$this->author = $author;
		}

	}

	// filtering arrays!

	$posts = [
		new Post("I Phone 6 Realeases", True, 'JP'),
		new Post("New Coursera Course", True, 'PK'),
		new Post("New Computer Virus", False, 'MW')
	];

	// // filtering by no published
	// $notPublishedPosts = array_filter($posts, function($post)
	// {
	// 	return ! $post->published;
	// });


	// modifying array

	// $modified = array_map(function($post)
	// {
	// 	$post->published = True;

	// }, $posts);

	// var_dump($posts);


	// Getting one specified Column for an array of objects only for php7

	// $titles = array_column($posts, 'title');
	// var_dump($titles);


	// for php5

	// $titles = array_map(function($post)
	// {
	// 	return $post->title;

	// }, $posts);
	// var_dump($titles);


	// array map works for simple arrays too!
	$posts = array_map(function($post){
		 return (array) $post;
	}, $posts);

	var_dump($posts);

	$authors = array_column($posts, 'author', 'title');

	var_dump($authors)

?>