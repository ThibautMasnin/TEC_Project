<?php 
	if(isset($_POST['submit'])) {
        //test si les champs du formulaire ne sont pas vides(reference à ajouter dans le formulaire de login)
		if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['reference'])){ 
			try{
				$db = new PDO("sqlite:bddProjet.sqlite3");
				//bloc qui vérifie l'existence du compte, renvoie à l'interieur du site ou sur la page de login
				$sql= $db->prepare('SELECT * FROM Proprietaire WHERE identifiant like ? and pwd like ? and refCam like ?');
				$sql->execute(array($_POST["username"],hash('md5',$_POST["password"]),$_POST["reference"]));
				$res = $sql->fetch();				
				session_start();
				if(!empty($res['idProprio'])){
                	$_SESSION['idProprio']=$res['idProprio'];					
					header("Location: " . ROOT_URL . "/view/user/camera.php");
				}else{
					header("Location: " . ROOT_URL . "/view/user/login.php");
				}
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}	
		}
	}
	else {
		header("Location: " . ROOT_URL . "/view/user/login.php");
	}
?>	