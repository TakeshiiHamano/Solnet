// Sets Global variable array.
var info = [
	{	
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image1.jpg",
		name:"Jerry 1",
		description:"Jerry poseing against the wall"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image2.png",
		name:"Jerry 2",
		description:"Jerry running with a smile"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image3.png",
		name:"Jerry 3",
		description:"Jerry standing with a happy suprised face"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image4.jpg",
		name:"Jerry 4",
		description:"Jerry running away"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image5.jpg",
		name:"Jerry 5",
		description:"Jerry standing happy presenting"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image1.jpg",
		name:"Jerry 6",
		description:"Jerry poseing against the wall"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image2.png",
		name:"Jerry 7",
		description:"Jerry running with a smile"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image3.png",
		name:"Jerry 8",
		description:"Jerry standing with a happy suprised face"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image4.jpg",
		name:"Jerry 9",
		description:"Jerry running away"
	},
	{
		current:false,
		path:"http://www.gtapaintball.ca/Gallery/Images/",
		image:"Image5.jpg",
		name:"Jerry 10",
		description:"Jerry standing happy presenting"
	}
];

// Loads gallery and info
window.onload = function (){

	// Sets local variable
	var gallery = document.getElementById('gallery_container');
	
	// Thumbnail contructor function.
	for(var i = 0; i < info.length; i++){

		gallery.innerHTML = gallery.innerHTML + "<section id='picture" + i + "' class='picture' onclick='showBig(info" + i + "," + i + ");' onmouseover='showInfo(info" + i + ");' onmouseout='hideInfo(info" + i + "," + i + ");'><article id='info" + i + "'><h1>" + info[i].name + "</h1><p>" + info[i].description + "</p></article></section>";
		document.getElementById('picture' + i).style.backgroundImage = "url('" + info[i].path + info[i].image + "')";
	};

	// Sets thumbnail conatiner width.
	document.getElementById("gallery_container").style.width = (190 * info.length) + 10 + "px";

	// Sets back button default status.
	document.getElementById('back').style.opacity = 0.5;
	document.getElementById("back").style.cursor = "default";
	
	// Sets interval to check scroll position of thumbnail container.
	setInterval(function(){
		var limit = document.getElementById('container').scrollWidth - document.getElementById('container').clientWidth;
		var scroll = document.getElementById('container').scrollLeft;

		if ((limit) <= scroll){

			// Sets forward & back opacity
			document.getElementById('forward').style.opacity = 0.5;
			document.getElementById('back').style.opacity = 1;

			// Sets forward & back cursor
			document.getElementById("forward").style.cursor = "default";
			document.getElementById("back").style.cursor = "pointer";

		} else if (document.getElementById('container').scrollLeft < 5){

			// Sets forward & back opacity
			document.getElementById('forward').style.opacity = 1;
			document.getElementById('back').style.opacity = 0.5;
			
			// Sets forward & back cursor
			document.getElementById("back").style.cursor = "default";
			document.getElementById("forward").style.cursor = "pointer";

		} else  if(document.getElementById('container').scrollLeft > 200 && (limit - 190) >= document.getElementById('container').scrollLeft) {
			
			// Sets forward & back opacity
			document.getElementById('forward').style.opacity = 1;
			document.getElementById('back').style.opacity = 1;
			
			// Sets forward & back cursor
			document.getElementById("back").style.cursor = "pointer";
			document.getElementById("forward").style.cursor = "pointer";
		}
	},50);
};

// shows the info window when mouse is on
function showInfo (imageNumber){
	document.getElementById(imageNumber.id).style.marginTop = 0;
}

// Hides the info window when mouse is off
function hideInfo (infoNumber,number){
	var bigVisable;
	
	// Checks for current large image.
	for (var i = 0; i < info.length; i++){
		if(info[i].current === true){
			bigVisable = i;
		};
	};

	// Sets info information slide up window position on mouseout.
	if(number != bigVisable){
		document.getElementById(infoNumber.id).style.marginTop = "190px";
	}

}

// Shows image in image_viewer.
function showBig (imageNumber,number){

	// Sets local variable.
	var previousNumber = "";
	var previous = "";

	// Checks for current large image.
	for (var i = 0; i < info.length; i++){
		if(info[i].current === true){
			previousNumber = i;
		}
	};

	// Sets previous variable.
	previous = "info" + previousNumber;

	// checks to see if pervious variable is equal to info(meaning there is no current large image).
	if (previous === "info"){

		// Sets large image.
		document.getElementById("image_viewer").style.backgroundImage = "url('" + info[number].path + info[number].image + "')";
    
     // Sets the opacitu of the large image.
		document.getElementById("image_viewer").style.opacity = 1;
		
		// Sets current selected as true.
		info[number].current = true;

		// Sets large images container to 100% width.
		document.getElementById("main_container").style.width = "100%";
	}else{
		
		if(previous === number){
		}else{
			// Lowers info container on thumbnail.
			document.getElementById(previous).style.marginTop = "190px";			

			// Sets pervious large images current valeu to false.
			info[previousNumber].current = false;
			
			// Changes the opacity of large image.
			document.getElementById("image_viewer").style.opacity = 0;
			
			// Sets a time out function to fire 0.5s after showBig function is run.
			setTimeout(function(){
				// Sets large image.
				document.getElementById("image_viewer").style.backgroundImage = "url('" + info[number].path + info[number].image + "')";

				// Sets Opacity of large image.
    			document.getElementById("image_viewer").style.opacity = 1;
    		
    		},500); 


			// Sets current image to true on selected image.
			info[number].current = true;

			// Sets large image container to 100%.
			document.getElementById("main_container").style.width = "100%";
		}
	};
		
};

// Scrolls the gallery left by 190px.
function galleryLeft (){

	// Checks to see if thumbnail container scroll positon is greater than 200.
	if (document.getElementById('container').scrollLeft < 200 ){
		
		// Sets back opacity.
		document.getElementById('back').style.opacity = 0.5;
		
		// Sets back & forward cursor.
		document.getElementById("back").style.cursor = "default";
		document.getElementById("forward").style.cursor = "pointer";
	
	}else{

		// Sets forward opacity and moves thumbnails to the left.
		document.getElementById('forward').style.opacity = 1;
		document.getElementById('container').scrollLeft -= 190;
	}
	
}

// Scrolls the gallery right by 190px.
function galleryRight (){

	// Sets limit.
	var limit = ((document.getElementById('container').scrollWidth - document.getElementById('container').clientWidth) - 190);
	
	// Checks if limit is greater or equal to scroll position.
	if (limit <= document.getElementById('container').scrollLeft){
		
		// Sets forward opacity.
		document.getElementById('forward').style.opacity = 0.5;
		
		// Sets back & forward cursor.
		document.getElementById("forward").style.cursor = "default";
		document.getElementById("back").style.cursor = "pointer";
	
	}else{
		
		// Sets back opacity and moves thumbnails to the right.
		document.getElementById('back').style.opacity = 1;
		document.getElementById('container').scrollLeft += 190;
	
	}
	
}

// Closes large image container.
function close_viewer (){

	// Sets large image containers width to 0.
	document.getElementById("main_container").style.width = "0";

	// Sets opacity of large image.
	document.getElementById("image_viewer").style.opacity = 0;
}