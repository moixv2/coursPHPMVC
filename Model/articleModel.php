<?php

	function getBDD() {
		// CONNECTION A LA BDD
		$bdd = new PDO('mysql:host=localhost;dbname=phpmvc;charset=utf8', 
	    'root', '');
	    return $bdd;
	}

	// Ici on va créer une fonction pour récupérer nos articles
	function getArticles() {
		// REQUETE POUR AFFICHER LES ARTICLES DE LA BDD 
		$bdd = getBdd();
		$articles = $bdd->query('SELECT * from articles');
		return $articles;
	}

	// Nouvelle fonction qui récupère juste UN commentaire grâce a l'ID de celui ci
	function getOneArticle() {

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		} else {
			throw new Exception("ID not found");
		}

		$bdd = getBdd();
		$article = $bdd->prepare('SELECT * from articles WHERE id = ?');
		$article->execute(array($id));
		
		if ($article->rowCount() == 1)
			return $article->fetch();
		else
			throw new Exception("No id : $articleID found");
	}

	function deleteTheArticle() {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		} else {
			throw new Exception("ID not found");
		}

		$bdd = getBdd();
		$deleted = $bdd->prepare("DELETE FROM articles WHERE id=$id");

		try {
			$deleted->execute();
			header('Location: /PHPMVC/index.php');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}

	// Fonction du modèle pour créer une donnée.
	function createArticle() {
		$title = $_POST['title'];
		$content = $_POST['content'];

		$bdd = getBdd();
		$creationDate = date('Y-m-d H:i:s');
		$newArticle = $bdd->prepare("INSERT INTO articles(title, content, date) VALUES(:title, :content, :date)");
		try {
			$newArticle->execute(array(
				'title' => $title,
				'content' => $content,
				'date' => $creationDate
			));
			header('Location: /PHPMVC/index.php');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}

	function updateTheArticle() {
		$id = $_POST['articleId'];
		$title = $_POST['newTitle'];
		$content = $_POST['newContent'];

		$bdd = getBdd();
		$request = $bdd->prepare("UPDATE articles SET title = '$title', content = '$content' WHERE id = $id");
		try {
			$request->execute();
			header('Location: /PHPMVC/index.php');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
	}