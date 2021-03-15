<?php
try{
  $db = new PDO("sqlite:bddProjet.sqlite3");

  //création table Proprietaire
	$sql="create table if not exists Proprietaire(
		idProprio integer primary key AUTOINCREMENT,
      	nom text,
      	prenom text,
		pwd text,
		refCam text,
		identifiant text);";

	$result = $db->exec($sql);

	//création table Personne
	$sql="create table if not exists Personne(
		idPersonne integer primary key AUTOINCREMENT,
      	nom text,
      	prenom text,
		lienPhoto text,
     	idProprio integer,
     	foreign key(idProprio) references Proprietaire(idProprio));";

	$result = $db->exec($sql);

  //création table Photo
	$sql="create table if not exists Photo(
		idPhoto integer primary key AUTOINCREMENT,
		lienPhoto text,
     	idProprio integer,
     	foreign key(idProprio) references Proprietaire(idProprio));";

	$result = $db->exec($sql);

  $sql=$db->prepare('insert into Proprietaire values (1,"Bat","Man",?,"TESTREF42","admin")');
	$sql->execute(array(hash('md5','admin')));
	}catch (Exception $e)
    {
        echo "Erreur SQL";
    }
	//retourne à l'écran de login, pour ne pas rester sur cette page
	header('Location: ' . ROOT_URL . "/view/user/login.php");?>
