<?php
if (isset($_REQUEST['valider'])) {
	extract($_REQUEST);
	define('dns', 'mysql:host=localhost;dbname=examen1;charset=utf8');
	define('user', 'root');
	define('pass', '');
	try {
		$cnx = new PDO(dns, user, pass);
	} catch (PDOException $e) {
		echo "ERREUR echec de la connexion" . $e->getMessage();
		exit();
	}

	$inser = "INSERT INTO contrat(idc,desi,idcl,idp) values('','$desi',$idcl,$idp)";
	$cnx->exec($inser);
}
