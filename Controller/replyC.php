<?php
include_once 'C:\xampp\htdocs\demo\Semah\config.php';

class TypeC {
    
    public function afficherreply() {
        $sql="SELECT * FROM replies";
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    public function chercherreply($id) {
        $sql="SELECT * FROM replies where id=:id";
        $db=Config::getConnexion();
        try{
            $query=$db->prepare($sql);
        $query->execute(['id' =>$id]);
        $liste=$query->fetch();
        return $liste;
        } 
        catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function ajouterreply($Reply) {
        $sql ="INSERT INTO replies (comment, commentID, userID, createdOn) VALUES ('$comment', '$commentID', '".$_SESSION['userID']."', NOW())";
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'comment'=>$Reply->getcomment(),
            'commentID'=>$Reply->getcommentID(),
            'userID'=>$Reply->getuserID(),
            'createdOn'=>$Reply->getcreatedOn(),

        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
    } 

     public function supprimerreply($id) {
        try {
            $db=config::getConnexion();
            $query=$db->prepare("DELETE FROM replies WHERE id=:id");
            $query->execute(['id'=>$id]);
        }
        catch (PDOException $e) {
            $e->getMessage();
        }
    }



?>