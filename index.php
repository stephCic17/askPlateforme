<?php

include "connexion.php";
include "tchat/tchat.php";
include "user/Users.php";
include "question/Questions.php";
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
	<meta name="description" content="Ciconia et votre grossesse"/>
	<meta name="keywords" content="grossesse, timeline"/>

	<link rel="icon" href="assets/imgs/favicon.ico">
	<script type="text/javascript" src="ressources/jquery.js"></script>
	<script type="text/javascript" src="script.js"></script>
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
	<?php echo  get_loginPopup();?>
	<?php echo  get_subscribePopup();?>
	<?php echo  get_sendMailPopup();?>
	<?php echo  get_NavBar();?>

		<div id="content">
			<div class="container">
				<!-- VIDEO WRAPPER -->
				<div id="videoWrapper">
					<iframe width="560" height="349" src="https://www.youtube.com/embed/txcWDy_3xS8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					<?php if (test_flag_video() == 0){ ?>
					<figure id="noActiveLive" class="filter -blur -example">
						<figcaption>
							<div class="egg"></div>
							<h6 class="title">Retrouvez-nous le 23 mars à 21 heures</h6>
							<span class="desc">Sur le thème de l'accouchement</span>
				      </figcaption>
				    </figure>
					<?php } ?>
				</div>
				<!-- END OF VIDEO WRAPPER -->

				<!-- CHAT WRAPPER -->
				<div class="chat-wrapper" id="tchatF">
					<div class="chat" id="tchat">
						<script>getMessage(); </script>
					</div>
					<?php if ($_SESSION["id"]){ ?>
						<div id="tchatForm">
							<form method="post" action="#">
								<div class="merge -horizontal -large">
									<input id="tchatInput" class="tchatArea" type=”text" placeholder="Ton texte..." />
									<script>
									 document.getElementById('tchatInput').focus();
									 var scroll =  document.getElementById('tchat');
									 scroll.scrollTop = scrollHeight;
</script>
									<button class="button -primary -only-icon">
										<i class="icon -paper-plane"></i>
									</button>
								</div>
							</form>
						</div>
					<?php } else echo "<button class='button -primary -large open-login-modal'> Connectez-vous pour accéder au tchat</button>"; ?>
				</div>
				<!-- END OF CHAT WRAPPER -->

			<!-- QUESTION WRAPPER -->
				<div class="container">
					<div class="question-wrapper" id="questionF">
						<h6>
							<i class="icon -archive"></i>
							QUESTIONS DU LIVE
						</h6>
					<?php if ($_SESSION["id"]){?>
						<div class="message -with-intent -line-primary" id="questionForm">
							<i class="icon -bubble-heart"></i>
							<h5>Posez votre question</h5>
							<form method="post" action="#">
								<div class="merge -horizontal">
									<input name="question" type=”text" placeholder="Ton texte..." />
	<button type="submit" class="button -primary -only-icon question-button">
										Entrer
									</button>
								</div>
							</form>
						</div><?php } else echo "<button class='button -primary -large open-login-modal'> Connectez-vous pour poser votre question</button>";
							  ?>
				</div>

					<div id="affQ">
						<script>getQuestion();</script>
					</div>
			</div>
			<!-- QUESTION WRAPPER -->
			<?php echo get_footer(); ?>
		</div>
</body>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-93939676-1', 'auto');
 ga('send', 'pageview');
</script>
