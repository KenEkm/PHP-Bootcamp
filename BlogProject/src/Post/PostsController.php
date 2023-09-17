<?php

namespace App\Post;

class PostsController
{
    private $postsRepository;

    public function __construct(PostsRepository $postsRepository)
    {
        $this->postsRepository = $postsRepository;
    }

    protected function render($view, $params){
        /* verwende Alternative extract Methode
        foreach($params AS $key => $value){
            ${$key} = $value;
        }
        */

        extract($params);
        include __DIR__."/../../Views/{$view}.php";
    }

    public function index(){
        //Funktionsaufruf für Datenabfrage mit SQL-query
        $posts = $this->postsRepository->fetchPosts();

        $this->render("post/index", [
            'posts' => $posts
        ]);

    
    }

    public function show(){
        $id = $_GET['id'];
        $post = $this->postsRepository->fetchPost($id);

        $this->render("post/show", [
            'post' => $post
        ]);
    }
}
?>