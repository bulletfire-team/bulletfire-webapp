<!DOCTYPE html>
	<html>
		<head>

			<meta charset="utf-8">
			<title><?= ' ' /*$translate->translate('Ticket view');*/ ?></title>
			<!-- The constant ASSET allows you to access the Assets folder to get your css or js files or your images -->
			<link rel="stylesheet" type="text/css" href="<?= ASSET . 'Styles/home.css' ?>">

		</head>
		
		<body>

			<h1><?= ' '/*$translate->translate('Ticket view');*/ ?></h1>
			<div class="ticket view">
				<a href="comment-view.php?id=<?=$ticket['id']?>"><h3>
					<?php
                    
                    foreach($param['ticket'] as $ticket){
                        echo htmlspecialchars($ticket['titre']) . ' le ' . $ticket['date_billet'] . ' à ' . $ticket['heure_billet'];
                	?>
                	<?php
                	}
					?>
				</h3>
				<br/>
				</a>
			</div>

		</body>
    </html>