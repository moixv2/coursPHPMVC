<!-- La fonction ob_start permet de mettre en tampon le HTML, au lieu de l'envoyer au navigateur, il le stock en mémoire -->
<?php ob_start(); ?>

<!-- La boucle foreach génère les balises HTML -->
<?php foreach($articles as $article) : ?>
		<article>
			<header>
				<a href="<?= 'index.php?action=getOneArticle&id=' . $article['id'];?>">
					<h2><?php echo $article['title'] ?></h2>
				</a>
				<time><?php echo $article['date'] ?></time>
			</header>
			<p><?php echo $article['content'] ?></p>
			<p class="toolButtons">
				<a href="<?= 'index.php?action=deleteArticle&id=' . $article['id'];?>"><i>Supprimer</i></a>
				<a data-toggle="modal" data-target="#updateModal-<?= $article['id']?>" href="#"><i>Modifier</i></a>
			</p>
		</article>
		<hr>

		<div class="modal fade" id="updateModal-<?= $article['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Update article</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

					<form action="" method="post">
		      	<div class="modal-body updateForm">
							<label for="newTitle">Titre : </label>
							<input type="hidden" name="articleId" value="<?= $article['id']; ?>"/>
							<input type="text" name="newTitle"/>
							<label for="newContent">Content : </label>
							<textarea name="newContent" cols="30" rows="3"></textarea>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" name="updateArticle" value="Modify" class="btn btn-primary"/>
			      </div>
					</form>

		    </div>
		  </div>
		</div>

<?php endforeach; ?>

<h4>Créer nouvel article :</h4>
<form action="" method="post" class="addForm">
	<label for="title">Titre : </label>
	<input type="text" name="title"/>
	<label for="content">Content : </label>
	<textarea name="content" cols="30" rows="5"></textarea>
	<input type="submit" name="addArticle" value="Create"/>
</form>

<!-- ICI ON DECLARE LES DEUX FONCTIONS NECESSAIRES DANS LE LAYOUT -->
<!-- On définis le titre qui apparaitra dans le layout -->
<?php $title = 'Mes Articles'; ?>
<!-- Une fois que la boucle est finies, ob_get_clean permet de récupérer dans une variable tout le HTML qui avait été mis en tampon au ob_start -->
<?php $content = ob_get_clean(); ?>

<!-- Ensuite on require le Layout -->
<?php require 'layoutView.php'; ?>




