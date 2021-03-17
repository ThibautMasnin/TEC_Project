<?php 
	if(isset($_POST['submit'])){
        //test si les champs du formulaire ne sont pas vides(reference à ajouter dans le formulaire d'ajout)
		
		if(isset($_POST['name']) && isset($_POST['surname'])){
			try{
                session_start();
                //stock le fichier quelque part, plutot utile pour l'utiliser
                $uploads_dir = ROOT_URL . "../view/uploads";
                $tmp_name = $_FILES["image"]["tmp_name"];
                $name = basename($_FILES["image"]["name"]);
                move_uploaded_file($tmp_name, "$uploads_dir/$name");
				

				$db = new PDO("sqlite:database.db");
				$sql=$db->prepare('insert into Personne (nom,prenom,lienPhoto,idProprio) values (?,?,?,?)');
				$sql->execute(array($_POST["name"],$_POST["surname"],"$uploads_dir/$name",$_SESSION['idProprio']));
				$res = $sql->fetch();				
				
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}	
		}
	}
    header("Location: ../view/user/list.php");
?>	