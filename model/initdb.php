<?php
	try{
		$db = new PDO("sqlite:".__DIR__."/database.db");

		//création table Proprietaire
		$sql="CREATE TABLE IF NOT EXISTS Proprietaire (
			idProprio INTEGER PRIMARY KEY AUTOINCREMENT,
			nom TEXT,
			prenom TEXT,
			pwd TEXT,
			refCam TEXT,
			identifiant TEXT
		);";

		$result = $db->exec($sql);

		//création table Personne
		$sql="CREATE TABLE IF NOT EXISTS Personne (
			idPersonne integer PRIMARY KEY AUTOINCREMENT,
			nom TEXT,
			prenom TEXT,
			lienPhoto TEXT,
			idProprio INTEGER,
			FOREIGN KEY(idProprio) REFERENCES Proprietaire(idProprio)
		);";

		$result = $db->exec($sql);

		//création table Photo
		$sql="CREATE TABLE IF NOT EXISTS Photo (
			idPhoto INTEGER PRIMARY KEY AUTOINCREMENT,
			lienPhoto TEXT,
			idProprio INTEGER,
			FOREIGN KEY(idProprio) REFERENCES Proprietaire(idProprio)
		);";

		$result = $db->exec($sql);

		$sql=$db->prepare('INSERT INTO Proprietaire VALUES (1,"Bat","Man",?,"TESTREF42","admin")');
		$sql->execute(array(hash('md5','admin')));
	}
	catch (Exception $e) {
        echo "Erreur SQL";
    }
?>
