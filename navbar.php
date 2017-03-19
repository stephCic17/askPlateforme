<?php

function get_NavBar(){
	session_start();
$nav =  "
<nav id='nav'>
	<div class='container'>
		<div class='row'>
		<div class='twelve col'>
		<a id='logo' class='pull-left'></a>";
if (!$_SESSION['pseudo']){
	$nav .= "<a class='button -round pull-right -line-primary open-subscribe-modal'>S'inscrire</a>
<a class='button -round pull-right -line-primary open-login-modal'>Se connecter</a>";
}
else { 
	$nav .= "<a href='user/disconnect.php' class='button -round pull-right -line-primary pull-right'>Se déconnecter</a>";
}
$nav .= "<a href='#' class='link pull-right'>Live</a>
<a href='https://ciconia.io' class='link pull-right'>Accueil</a>
</div>
</div>
</div>
</nav>";
	return $nav;
}

?>
