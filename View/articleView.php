<?php ob_start() ?>
<article>
  <header>
    <h1><?= $article['title'] ?></h1>
    <time><?= $article['date'] ?></time>
  </header>
  <p><?= $article['content'] ?></p>
			<p class="toolButtons">
				<a href="<?= 'index.php?action=deleteArticle&id=' . $article['id'];?>"><i>Supprimer</i></a>
				<a href="<?= 'index.php?action=updateArticle&id=' . $article['id'];?>"><i>Modifier</i></a>
			</p>
</article>
<hr />
<a href="index.php">Retour en arrière</a>

<!-- On définis le titre de la page -->
<?php $title = 'Article - '. $article['title']; ?>

<!-- On définis le contenu de la page avec le contenu de ob_start -->
<?php $content = ob_get_clean(); ?>

<!-- On appelle le Layout -->
<?php require 'layoutView.php'; ?>
