var cssMin = document.getElementById("cssmin").value;

function minify(){

	if (css !== "") {
		var css = document.getElementById("css").value;
		var minified = css.replace(/\s/g,'')

		$("#cssmin").text(minified);

		// document.getElementById("perc").value = perValEms;
		// document.getElementById("perc").style.color = "#47D0BD";
	} else {
		$("#css").text("Enter CSS here");
		$("#cssmin").text("");
	}
}

function clearText(){
	document.getElementById("css").value = "";
	$("#cssmin").text("");
}
