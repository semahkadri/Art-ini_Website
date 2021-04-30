<?php
include_once "configg.php";

class CommentC {
    
    public function affichercomment() {
        $sql="SELECT comments.id, name, comment, DATE_FORMAT(comments.createdOn, '%Y-%m-%d') AS createdOn FROM comments INNER JOIN users ON comments.userID = users.id ORDER BY comments.id DESC LIMIT $start, 20";
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }


     public function ajoutercomment($Comment) {
        $sql ="INSERT INTO comments (userID, comment, createdOn) VALUES ('".$_SESSION['userID']."','$comment',NOW())";
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'comment'=>$Comment->getcomment(),
            'createdOn'=>$Comment->getcreatedOn(),

        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 
}



?>