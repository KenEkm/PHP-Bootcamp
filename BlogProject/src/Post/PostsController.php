<?php

namespace App\Post;

class PostsController
{
    private $postsRepository;

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    public function index(){
        //Funktionsaufruf für Datenabfrage mit SQL-query
        $posts = $this->postsRepository->fetchPosts();

        include __DIR__."/../../Views/Post/index.php";
    }

    public function show(){
        $id = $_GET['id'];
        $post = $this->postsRepository->fetchPost($id);

        include __DIR__."/../../Views/Post/show.php";
    }
}
?>