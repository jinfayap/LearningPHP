<?php

class Post {
    public $title;

    public $author; 

    public $published;

    public function __construct($title, $author, $published) {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }

}

$posts = [
    new Post('My First Post', 'jf', true),
    new Post('My Second Post', 'jf', true),
    new Post('My Third Post', 'hi', true),
    new Post('My Fourth post', 'jh', false)
];

// array filter
// $unpublishedPosts = array_filter($posts, function ($post) {
//     return !$post->published;
// });

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

// array map
// $modified = array_map(function($post) {
//     return ['title' => $post->title];
// }, $posts);

// foreach($posts as $post) {
//     $post->published = true;
// }

$titles = array_column($posts, 'author');

var_dump($titles);