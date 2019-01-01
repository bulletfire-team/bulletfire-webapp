<!DOCTYPE html>
	<html>
		<head>

			<?php require("Templates/Global/head.php") ?>
			<title><?= ' ' /*$translate->translate('Topic');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		 
		<body>
			<?php require("Templates/Global/header.php") ?>
            <h1><?= ' '/*categorie a recup en bdd*/ ?></h1>
				<div class="ticket">
				<?php
					echo'<h3>' . $param['ticket']['titre'] . '</h3>';
					echo'<p>' . $param['ticket']['date_creation_cplt'] . ' ' . $param['ticket']['auteur'] . '</p>';
				?>
				<p>
				<?php
					echo htmlspecialchars($param['ticket']['contenu']);
				?>
				</p>
				</div>
				<div class="comment">
				<h4>
				<?php
					foreach($param['comment'] as $comment){
						echo'<p> le ' . $comment['date_commentaire'] . ' à ' . $comment['heure_commentaire'] . ' ' . $comment['auteur'] . '</p>';
					} 						
				?>
				</h4>
				<p>
				<?php
					echo htmlspecialchars($comment['commentaire']);
				?>
				<br/>
				</p>
				</div>
			<form action="" method="post">
                <label for="contenu">Auteur</label>
				<input type="text" name="auteur" id="auteur" placeholder="Entrer votre nickname">
				<label for="titre">Commentaire</label>
                <textarea name="commentaire" id="commentaire" placeholder="Entrer votre commentaire"></textarea>
				<br>
                <input type="submit" value="Envoyer">
            </form>
		</body>
	</html>