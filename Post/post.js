function nameValidation(){
	var name = document.getElementById("name");

	if(name.value == "" || name.value == null){
		document.getElementById("nameErr1").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr1").style.opacity=0;
	}
}

function titleValidation(){
	var title = document.getElementById("title");

	if(title.value == "" || title.value == null){
		document.getElementById("nameErr2").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr2").style.opacity=0;
	}
}

function textValidation(){
	var text = document.getElementById("text");

	if(text.value == "" || text.value == null){
		document.getElementById("nameErr3").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr3").style.opacity=0;
	}
}

