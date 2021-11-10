function nameValidation(){
	var name = document.getElementById("name");

	if(name.value == "" || name.value == null||){
		document.getElementById("nameErr1").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr1").style.opacity=0;
	}
}

function emailValidation(){
	var email = document.getElementById("email");

	if(email.value == "" || email.value == null){
		document.getElementById("nameErr2").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr2").style.opacity=0;
	}
}

function unameValidation(){
	var website = document.getElementById("website");

	if(website.value == "" || website.value == null){
		document.getElementById("nameErr3").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr3").style.opacity=0;
	}
}

function passValidation(){
	var comment = document.getElementById("comment");

	

	if(comment.value == "" || comment.value == null){
		document.getElementById("nameErr4").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr4").style.opacity=0;
	}
}

function conpassValidation(){
	var conpass = document.getElementById("conpass");

	

	if(conpass.value == "" || conpass.value == null){
		document.getElementById("nameErr5").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr5").style.opacity=0;
	}
}

function addValidation(){
	var add = document.getElementById("add");

	if(add.value == "" || add.value == null){
		document.getElementById("nameErr6").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr6").style.opacity=0;
	}
}