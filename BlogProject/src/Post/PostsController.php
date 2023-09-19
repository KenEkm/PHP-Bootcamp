<?php

namespace App\Post;

use App\Core\AbstractController;

class PostsController extends AbstractController
{
    private $postsRepository;
    private $commentsRepository;

    public function __construct(
        PostsRepository $postsRepository, 
        CommentsRepository $commentsRepository
    )
    {
        $this->postsRepository = $postsRepository;
        $this->commentsRepository = $commentsRepository;
    }

    public function index(){
        //Funktionsaufruf für Datenabfrage mit SQL-query
        $posts = $this->postsRepository->all();

        $this->render("post/index", [
            'posts' => $posts
        ]);
    }

    public function show(){
        $id = $_GET['id'];
        if(isset($_POST['content'])){
            $content = $_POST['content'];
            $this->commentsRepository->insertForPost($id, $content);
        }

        $post = $this->postsRepository->find($id);
        $comments = $this->commentsRepository->allByPost($id);

        $this->render("post/show", [
            'post' => $post,
            'comments' => $comments
        ]);
    }
}
?>