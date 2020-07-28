<?php ob_start(); ?>
<p>Une erreur est survenue : 
	<br/><br/>
	<b><?php echo $errorMessage ?></b>
</p>

<!-- On définis le titre de la page -->
<?php $title = 'Erreurs...'; ?>

<!-- On définis le contenu de la page avec le contenu de ob_start -->
<?php $content = ob_get_clean(); ?>

<!-- On appelle le Layout -->
<?php require 'layoutView.php'; ?>
