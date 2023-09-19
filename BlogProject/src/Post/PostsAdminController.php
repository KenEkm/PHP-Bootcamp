<?php

namespace App\Post;

use App\Core\AbstractController;
use App\User\LoginService;

class PostsAdminController extends AbstractController
{
    private $postsRepository;
    private $loginService;

    public function __construct(
        PostsRepository $postsRepository,
        LoginService $loginService
        )
    {
        $this->postsRepository = $postsRepository;
        $this->loginService = $loginService;
    }

    public function index()
    {
        $this->loginService->check();

        $all = $this->postsRepository->all();
        $this->render("Post/Admin/index", [
            'all' => $all
        ]);
    }

    public function edit()
    {
        $this->loginService->check();
        
        $id = $_GET['id'];
        $entry = $this->postsRepository->find($id);

        $savedSuccess = false;
        if(!empty($_POST['title']) AND !empty($_POST['content'])){
            $entry->title = $_POST['title'];
            $entry->content = $_POST['content'];
            $this->postsRepository->update($entry);
            $savedSuccess = true;
        }

        $this->render("Post/Admin/edit", [
            'entry' => $entry,
            'savedSuccess' => $savedSuccess
        ]);
    }
}
?>