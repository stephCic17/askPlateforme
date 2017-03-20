<?php

include "connexion.php";
include "user/Users.php";
include "footer.php";
include "navbar.php";
include "popup.php";
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"/>
	<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta http-equiv="Content-Type" content="text/html"/>

	<title>Ciconia</title>
	<meta name="author" content="Ciconia"/>
	<meta name="description" content="Ciconia est une application calendrier de grossesse personnalisé"/>
	<meta name="keywords" content="grossesse, timeline"/>

	<link rel="icon" href="assets/imgs/favicon.ico">
	<script type="text/javascript" src="ressources/jquery.js"></script>
	<script type="text/javascript" src="navBar.js"></script>

  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/content.css" type="text/css" />
  <link rel="stylesheet" href="css/modal.css" type="text/css" />
  <link rel="stylesheet" href="css/navbar.css" type="text/css" />
  <link rel="stylesheet" href="css/footer.css" type="text/css" />
  <link rel="stylesheet" href="css/question.css" type="text/css" />
  <link rel="stylesheet" href="css/chat.css" type="text/css" />
  <link rel="stylesheet" href="css/videoWrapper.css" type="text/css" />
  <link rel="stylesheet" href="css/sub-nav.css" type="text/css" />

	</head>
	<body>
	<body>
	<?php echo  get_loginPopup();?>
	<?php echo  get_subscribePopup();?>
	<?php echo  get_sendMailPopup();?>
	<?php echo  get_NavBar();?>
	<div id="content">
    <div class="sub-nav" id="legalHeader">
      <div id="main-background"></div>
      <div class="container">
          <h1>À propos</h1>
		  <p class="articleLegal">
			  Vous êtes actuellement connecté au site Internet ciconia.io (dénommé ci-après “le Site”). L’ensemble des données et des informations présentes sur ce Site sont consultables gratuitement par le public. Elles sont la propriété intellectuelle exclusive de la société Ciconia SAS. L’internaute ayant accès au Site s’engage à respecter les conditions d’utilisation telles que décrites dans la présente rubrique “Mentions Légales”.<br />
	<b> L’utilisation de ce Site est à vocation uniquement informative et ne se substitue pas à une consultation médicale délivrée par un professionnel de santé.</b>
		  </p>
	  </div>
    </div>
    <div class="container">
  	  <div class="articleLegalNb">
    	  <h3>Editeur</h3>
    	  <p class="articleLegal">
			  Ciconia SAS<br/>
			  3, rue Cognacq-Jay<br/>
			  75007 Paris<br/>
			  contact@ciconia.io<br/>
			  RCS Paris : 823 243 506<br/>
		  </p>
    	</div>
  	  <div class="articleLegalNb">
    	  <h3>Hébergeurs</h3>
    	  <p class="articleLegal">
			  [Information de la société à mettre ici : nom, adresse, numéro de RCS, tel, adresse email]
		  </p>
      </div>
  	  <div class="articleLegalNb">
    	  <h3>Propriété intellectuelle et droits de reproduction</h3>
    	  <p class="articleLegal">
			  L’ensemble de ce Site relève de la législation française et internationale sur le droit d’auteur et la propriété intellectuelle et industrielle. Tous les droits de reproduction sont réservés, y compris pour les séquences animées, les documents téléchargeables et les représentations iconographiques et photographiques.
			  La reproduction de tout ou partie du contenu de ce Site sur un support quel qu’il soit, est formellement interdite sauf autorisation expresse de Ciconia SAS, et constitue une contrefaçon. Toute utilisation d’informations provenant du Site doit obligatoirement mentionner la source de l’information. L’adresse Internet du site ciconia.io doit impérativement figurer dans la référence.
		  </p>
      </div>
	  <div class="articleLegalNb">
    	  <h3>Protection des données personnelles</h3>
    	  <p class="articleLegal">
			  Aucune information personnelle et de santé n’est collectée à votre insu, utilisée à des fins non prévues ou retransmise ou revendue à des tiers. Les informations que nous recueillons sont destinées à mieux vous connaître, elles ne seront en aucun cas transmises à des tiers.

			  Conformément à la loi “Informatique et Libertés” du 6 janvier 1978, vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Pour exercer ce droit, il vous suffit de nous envoyer un email à l’adresse contact@ciconia.io.
		  </p>
	  </div>
	  <div class="articleLegalNb">
    	  <h3>Données statistiques</h3>
    	  <p class="articleLegal">
			  Lors de l’utilisation du Site, des cookies générés par les serveurs informatiques de Ciconia SAS peuvent s’installer automatiquement sur l’ordinateur de l’internaute. Ces cookies ne permettent pas d’identifier l’internaute, mais servent seulement à mesurer le nombre de pages vues, le nombre de visites ainsi que l’activité de l’internaute sur le Site.
			  L’internaute peut refuser ces cookies, les modifier ou les supprimer à tout moment et gratuitement à travers les choix proposés par le logiciel de navigation.
			  Toutefois, en paramétrant le navigateur sur le refus des cookies, certaines pages, espaces ou fonctionnalités du Site de Ciconia SAS ou de celui de ses partenaires pourront devenir inaccessibles.
		  </p>
      </div>
	  <div class="articleLegalNb">
    	  <h3>Responsabilité</h3>
    	  <p class="articleLegal">
			  Le contenu et l’environnement des sites extérieurs auxquels le Site peut renvoyer (notamment par l’intermédiaire de liens hypertexte) n’engagent pas la responsabilité de l’éditeur qui ne saurait être tenu pour responsable d’éléments qu’il n’aurait pas introduits lui-même et qui proviendraient d’actions extérieures indélicates.
			  Bien qu’un soin tout particulier ait été apporté à la réalisation du contenu du Site, il ne peut être exclu qu’une erreur s’y soit fortuitement glissée. La consultation du Site présuppose que l’internaute en accepte les termes et conditions précisés ci-dessus.
			  Le fait que l’information mise à disposition sur le Site vise à soutenir et non à remplacer la relation entre un patient et son médecin est clairement établi.
		  </p>
      </div>
    </div>
  <?php echo get_footer();?>
</div>

</body>
