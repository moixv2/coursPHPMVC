<?php
	// Avant, on appellais le modèle, maintenant c'est dans le Controller que se trouvent nos différentes fonctionnalitées
	require 'Controller/articleController.php';

	// Notre index est devenu un controlleur FRONTAL
	// C'est lui qui va interpréter les requêtes de l'utilisateur et traiter l'information necessaire

	// Nous devons nous donc tester les différents cas d'utilisations
	// Un paramètre action présent => page d'Article
	// Une variable POST contenant addArticle présente? => Création d'article
	// Pas de paramètres => page d'acceuil avec tout les Articles
	try {
		// Si on reçoit une requete GET avec ACTION dedans
		if(isset($_GET["action"])) {
			if ($_GET['action'] == 'getOneArticle') {
				oneArticle();
			} else if ($_GET['action'] == 'deleteArticle') {
				deleteArticle();
			} else {
				throw new Exception("Action not valid");
			}
		// Si on reçoit une requete POST avec addArticle dedans
		} else if (isset($_POST['addArticle'])) {
			// Fonction du controller
			createNewArticle();
		// Si on reçoit une requete POST avec updateArticle dedans
		} else if (isset($_POST['updateArticle'])) {
			updateArticle();
		// Si on reçoit ni l'un ni l'autre
		} else { 
			allArticles();
		}
	} catch (Exception $e) {
		error($e->getMessage());
	}