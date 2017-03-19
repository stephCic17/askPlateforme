var url="tchat/tchatAjax.php";
var url2 = "question/questionAjax.php"
var popupActive = 0;
var url3="user/userAjax.php";
var timer2 = setInterval(interval,2000);
var lastid=0;
var lastidQ=0;
var login = "";

$(function(){
	$("#tchatForm form").submit(function(){
		var message = $("#tchatForm form input").val();
		var x = document.getElementById('tchat');
		x.scrollTop = x.scrollHeight;
		var tchatInput = document.getElementById('tchatInput');
		tchatInput.focus();

		$.post(url, {action:"addMessage", message:message}, function(data){

		},"json");

	});
	$("#questionForm form").submit(function(){
		var question = $("#questionForm form input").val();
		var z = document.getElementById('affQ');
		z.scrollTop=z.scrollHeight;
		$.post(url2, {action:"addQuestion", question:question}, function(data){
		},"json");
	});
	$("#UserForm form").submit(function(){
		var login = $("#UserForm form input").val();
		$.post(url3, {action:"TestPseudo", login:login}, function(data){
		},"json");
	});
	
});

function interval() {
	getMessage();
	getQuestion();
}

function getMessage() {
	$.post(url, {action:"getMessage", lastid:lastid}, function(data){
		if(data.erreur=="ok"){
			reloadDivTchat(data.result);
		}
	},"json");
}

var isModalOpen = false;

var openLoginModal = function() {
	$("#loginModal").addClass("-opening");
	window.setTimeout(function() {
		$("body").addClass("no-scroll");
		$("#loginModal").addClass("-open");
		$("#loginModal").removeClass("-opening");
	}, 600);
}

var openSubscribeModal = function() {
	$("#subscribeModal").addClass("-opening");
	window.setTimeout(function() {
		$("body").addClass("no-scroll");
		$("#subscribeModal").addClass("-open");
		$("#subscribeModal").removeClass("-opening");
	}, 600);
}

var openLostPasswordModal = function() {
	$("#lostPasswordModal").addClass("-opening");
	window.setTimeout(function() {
		$("body").addClass("no-scroll");
		$("#lostPasswordModal").addClass("-open");
		$("#lostPasswordModal").removeClass("-opening");
	}, 600);
}
var openPseudoExistModal = function() {
	$("#lostPasswordModal").addClass("-opening");
	window.setTimeout(function() {
		$("body").addClass("no-scroll");
		$("#lostPasswordModal").addClass("-open");
		$("#lostPasswordModal").removeClass("-opening");
	}, 600);
}

var closeModal = function() {
	$(".modal").addClass("-closing");
	window.setTimeout(function() {
		$(".modal").removeClass("-open");
		$(".modal").removeClass("-closing");
		$("body").removeClass("no-scroll");
	}, 350);
}

$(document).ready(function() {

	var x = document.getElementById('tchat');
	x.scrollTop = x.scrollHeight;

	$(".open-login-modal").click(function(event) {
		event.preventDefault();
		if(isModalOpen) {
			closeModal();
			window.setTimeout(function() {
				openLoginModal();
				isModalOpen = true;
			}, 350);
		}
		else {
			openLoginModal();
			isModalOpen = true;
		}
	});

	$(".open-subscribe-modal").click(function(event) {
		event.preventDefault();
		if(isModalOpen) {
			closeModal();
			window.setTimeout(function() {
				openSubscribeModal();
				isModalOpen = true;
			}, 350);
		}
		else {
			openSubscribeModal();
			isModalOpen = true;
		}
	});

	$(".open-lostpassword-modal").click(function(event) {
		event.preventDefault();
		if(isModalOpen) {
			closeModal();
			window.setTimeout(function() {
				openLostPasswordModal();
				isModalOpen = true;
			}, 350);
		}
		else {
			openLostPasswordModal();
			isModalOpen = true;
		}
	});
	$(".open-pseudoExist-modal").click(function(event) {
		event.preventDefault();
		if(isModalOpen) {
			closeModal();
			window.setTimeout(function() {
				openPseudoExistModal();
				isModalOpen = true;
			}, 350);
		}
		else {
			openPseudoExistModal();
			isModalOpen = true;
		}
	});

	$(".close-modal").click(function(event) {
		event.preventDefault();
		isModalOpen = false;
		closeModal();
	});
});


function getQuestion(){
	$.post(url2, {action:"getQuestions", lastidQ:lastidQ}, function(data){

		if(data.erreur=="ok"){
			reloadDiv(data.div);
		}
		},"json");
	return false;
}

function upvote(id){
	$.post(url2, {action:"addUpvote", id:id}, function(data){
		if (data.erreur == "ok"){
			getQuestion();
		}
		else if (data.erreur == "id")
		{
			$("#subscribeModal").addClass("-opening");
			window.setTimeout(function() {
				$("body").addClass("no-scroll");
				$("#subscribeModal").addClass("-open");
				$("#subscribeModal").removeClass("-opening");
			}, 600);
		}
		else{
			alert("Vous avez déjà voté pour cette question");
		}
	}, "json");
	return false;
}
function reloadDiv(data){
	document.getElementById('affQ').innerHTML = data;
}
function reloadDivTchat(data){
		document.getElementById('tchat').innerHTML = data;
}

function test_valid_mail(champ){

	var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!regex.test(champ.value))
	{
		surligne(champ, true);
		return false;
	}
	surligne(champ, false);
	return true;
}

function test_valid_mail_send(champ){

	var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(!regex.test(champ.value))
	{
		surligne(champ, true);
		$("#btn-sendMail").addClass("-disabled");
		return false;
	}
	surligne(champ, false);
	$("#btn-sendMail").addRemove("-disabled");
	return true;
}

function test_valid_pseudo(pseudo){
	login = pseudo.value;
	$.post(url3, {action:"TestPseudoInput", login:login}, function(data){
		if(data.erreur == "ok"){
			pseudo.style.backgroundColor = "";
			$("#btn-subscribe").removeClass("-disabled");
		}
		else {
			pseudo.style.backgroundColor = "#fba";
			$("#btn-subscribe").addClass("-disabled");
		}
	},"json");
}

function test_invalid_pseudo(pseudo){
	login = pseudo.value;
	$.post(url3, {action:"TestPseudoInput", login:login}, function(data){
		if(data.erreur == "ok"){
			pseudo.style.backgroundColor = "#fba";
			$("#btn-connect").addClass("-disabled");
		}
		else {
			pseudo.style.backgroundColor = "";
			$("#btn-connect").removeClass("-disabled");
		}
	},"json");
}

function test_valid_name(pseudo){
	login = pseudo;
	$.post(url3, {action:"TestPseudoInput", login:login}, function(data){
		if(data.erreur == "ok"){
			pseudo.style.backgroundColor = "";
			$("#btn-subscribe").removeClass("-disabled");
		}
		else {
			pseudo.style.backgroundColor = "#fba";
			$("#btn-subscribe").addClass("-disabled");
		}
	},"json");
}

function surligne(champ, erreur)
{
	if(erreur){
		champ.style.backgroundColor = "#fba";
		$("#btn-subscribe").addClass("-disabled");
	}
	else
	{
		champ.style.backgroundColor = "";
		test_valid_pseudo_name(login);
	}
}
