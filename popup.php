<?php

function get_loginPopup(){

	return "
<div id='loginModal' class='modal login'>
	<div class='overlay close-modal'></div>
	<div class='content'>
	 <div class='card content-wrapper'>
		 <div class='close-button close-modal'>
			 <i class='icon -cross'></i>
		 </div>
		 <div>
			 <h5>Se connecter</h5>
			 <form method='post' action='user/login.php'>
				 <fieldset class='-large -has-icon'>
					 <i class='icon -user'></i>
					 <input name='name' type='text' placeholder='Pseudo' onblur='test_invalid_pseudo(this)'/>
				 </fieldset>
				 <fieldset class='-large -has-icon'>
					 <i class='icon -lock'></i>
					 <input name='password' type='password' placeholder='Mot de passe' />
				 </fieldset>
				 <button type='submit' id='btn-connect' class='button -large -primary'>
					 <span>Se connecter</span>
				 </button>
			 </form>
			 <footer>
				 <a class='open-subscribe-modal'>S'inscrire</a> -
				 <a class='open-lostpassword-modal'>Mot de passe perdu ?</a>
			 </footer>
		 </div>
	 </div>
	</div>
</div>
";
}

function get_subscribePopup(){
return "
<div id='subscribeModal' class='modal login -subscribe'>
	<div class='overlay close-modal'></div>
	<div class='content'>
		<div class='card content-wrapper'>
			<div class='close-button close-modal'>
				<i class='icon -cross'></i>
			</div>
			<div>
				<h5>Inscription</h5>
				<div class='two-cols-verticaly-aligned'>
					<div class='wrapper'>
						<form method='post' action='user/create_account.php'>
							<fieldset class='-large -has-icon '>
								<i class='icon -user'></i>
								<input name='mail' type='name' placeholder='Email' onblur='test_valid_mail(this)'/>
							</fieldset>
							<fieldset class='-large -has-icon '>
								<i class='icon -user'></i>
								<input name='pseudo' type='name' placeholder='Pseudo' onblur='test_valid_pseudo(this)' />
							</fieldset>
							<fieldset class='-large -has-icon'>
								<i class='icon -lock'></i>
								<input name='password' type='password' placeholder='Mot de passe' />
							</fieldset>
							<button id='btn-subscribe' class='button -large -primary -disabled'>
								<span>S'inscrire</span>
							</button>
						</form>
					</div>
					<div class='wrapper why'>
						<img class='image' src='assets/imgs/svg/egg.svg'></img>
						<label>Pourquoi créer un compte ?</label>
						<p>Pendant nos émissions, avoir un compte vous permet de réagir en temps réel et de poser des questions à l'avance.</p>
					</div>
				</div>
				<footer>
					<a class='open-login-modal'>Se connecter</a> -
					<a class='open-lostpassword-modal'>Mot de passe perdu ?</a>
				</footer>
			</div>
		</div>
	</div>
</div>
";
}

function get_sendMailPopUp(){
return "
<div id='lostPasswordModal' class='modal login'>
	<div class='overlay close-modal'></div>
	<div class='content'>
		<div class='card content-wrapper'>
			<div class='close-button close-modal'>
				<i class='icon -cross'></i>
				</div>
				<div>
					<h5>Mot de passe perdu ?</h5>
					<form method='post' action='user/sendMail.php'>
						<fieldset class='-large -has-icon'>
							<i class='icon -user'></i>
							<input name='email' type='text' placeholder='Email' onblur='test_valid_mail_send(this)'/>
						</fieldset>
						<button id='btn-sendMail' type='submit' class='button -large -primary'>
							<span>Envoyer !</span>
						</button>
					</form>
					<footer>
						<a class='open-login-modal'>Se connecter</a> -
						<a class='open-subscribe-modal'>S'inscrire</a>
					</footer>
				</div>
		</div>
	</div>
</div>";
}
