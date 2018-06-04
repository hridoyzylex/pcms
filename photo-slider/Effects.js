function initialize(){

	var images = document.querySelectorAll("li img[title='fruits']");
	images[0].style = "display: initial;";
}

function moveForward(){

	var i = 0;
	var images = document.querySelectorAll("li img[title='fruits']");

	for(i = 0; i < images.length; i++){

		if(images[i].style.display == "initial")
			break;


	}

	images[i].style = "display: none";

	if(i == 2)
		i = -1;

	images[i + 1].style = "display: initial";
}

function moveBackward(){

	var i = 0;
	var images = document.querySelectorAll("li img[title='fruits']");

	for(i = 0; i < images.length; i++){

		if(images[i].style.display == "initial")
			break;


	}

	images[i].style = "display: none";

	if(i == 0)
		i = 3;

	images[i - 1].style = "display: initial";

}