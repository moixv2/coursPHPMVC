<?php
	require 'Model/articleModel.php';

	// Affiche le contenu de notre page Home
	// Qui consiste a afficher tout nos articles
	// (on utilise les fonctionnalitées du Modele)
	function allArticles() {
		// Appel de la fonction du modèle
		$articles = getArticles();
		require 'View/homeView.php';
	}

	function oneArticle() {
		// Appel de la fonction du modèle
		$article = getOneArticle();
		require 'View/articleView.php';
	}

	function error($errorMessage) {
		// Appel de la vue d'erreur
		require 'View/errorView.php';
	}

	function createNewArticle() {
		// Appel de la fonction du modèle
		$newArticle = createArticle();
	}

	function deleteArticle() {
		// Appel de la fonction du modèle
		$deletedArticle = deleteTheArticle();
	}

	function updateArticle() {
		// Appel de la fonction du modèle
		$updatedArticle = updateTheArticle();
	}


