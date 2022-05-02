<?php
    require_once ("connect.php");

    function ajoutUtilisateur(){
        global $pdo;
        $username=$_POST['username'];
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $pwd=$_POST['pwd'];
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        $genre=$_POST['genre'];
        $requete = "INSERT INTO utilisateur (username, name, mail, pwd, day, month, year, genre) VALUES(:username, :name,:mail,:pwd,:day,:month,:year, :genre)";
        $query = $pdo->prepare($requete);
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':pwd', $pwd, PDO::PARAM_STR);
        $query->bindValue(':day', $day, PDO::PARAM_STR);
        $query->bindValue(':month', $month, PDO::PARAM_STR);
        $query->bindValue(':year', $year, PDO::PARAM_STR);
        $query->bindValue(':genre', $genre, PDO::PARAM_STR);
        $query->execute(array(':username' => $username, ':name' => $name, ':mail' => $mail, ':pwd' => $pwd, ':day' => $day, ':month' => $month, ':year' => $year, ':genre' => $genre));
        echo "Bienvenue sur Facebook";
    }
    function getAuthentification($login,$pass){
      global $pdo;
      $query2 = "SELECT * FROM utilisateur where mail= ? and pwd= ?";
      $prep = $pdo->prepare($query2);

      $query= $pdo->prepare("SELECT * FROM utilisateur where mail= ? and pwd= ?");
      $query->execute([$login, $pass]);

      if($query->rowCount()== 1)
          return $query->fetch();
      else
        return false;
  }

?>