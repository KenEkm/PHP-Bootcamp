<?php
namespace App\Post;

use PDO;
use App\Core\AbstractRepository;

class CommentsRepository extends AbstractRepository
{
    public function getTableName(){
        return "comments";
    }

    public function getModelName(){
        return "App\\Post\\CommentModel";
    }

    public function insertForPost($postId, $content){
        $table = $this->getTableName();
        $stmt = $this->pdo->prepare(
            "INSERT INTO `$table` (`content`, `post_id`) VALUES ( ?, ?)"
        );
        $stmt->execute([$content, $postId]);
    }

    public function allByPost($id){
        $table = $this->getTableName();
        $model = $this->getModelName();

        $stmt = $this->pdo->prepare("SELECT * FROM `$table` WHERE post_id = ?"); //prepare Statements gegen SQL-Inj
        $stmt->execute([$id]);   //? aus prepare Statement wird hier gefüllt

        $comments = $stmt->fetchAll(PDO::FETCH_CLASS, $model);

        return $comments;
    }
}
?>