<?php
include_once 'C:\xampp\htdocs\demo\Semah\config.php';

class userC {
    
     public function ajouteruser($User) {
        $sql ="INSERT INTO users (name,email,password,createdOn) VALUES ('$name', '$email', '$ePassword', NOW())";
        try{
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute([
            'name'=>$User->getname(),
            'email'=>$User->getemail(),
            'ePassword'=>$User->getpassword(),
            'createdOn'=>$User->getcreatedOn(),

        ]);
        }
        catch (PDOException $e) {
            $e->getMessage();
    }
   
     }
    }

?>