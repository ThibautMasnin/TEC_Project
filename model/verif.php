<?php
	session_start();
	if(isset($_POST['submit'])) {
        //test si les champs du formulaire ne sont pas vides(reference à ajouter dans le formulaire de login)
		if(isset($_POST['username']) && isset($_POST['password'])){ 
			try{
				echo "champs existent";

				$db = new PDO("sqlite:database.db");
				//bloc qui vérifie l'existence du compte, renvoie à l'interieur du site ou sur la page de login
				$sql= $db->prepare('SELECT * FROM Proprietaire WHERE identifiant like ? and pwd like ?');
				$sql->execute(array($_POST["username"],hash('md5',$_POST["password"])));
				$res = $sql->fetch();				
				if($res['identifiant']==$_POST["username"]){
					echo "proprio existe";
                	$_SESSION['idProprio']=$res['idProprio'];
					$_SESSION['login']="yes";					
					header("Location: ../view/user/camera.php");
				}else{
					header("Location: ../view/user/login.php");
				}
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}	
		}
	}
	else {
		header("Location: ../view/user/login.php");
	}
?>	