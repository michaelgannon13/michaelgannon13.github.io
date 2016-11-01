var cssMin = document.getElementById("cssmin").value;

function minify(){

	if (css !== "") {
		var css = document.getElementById("css").value;
		var minified = css.replace(/\s/g,'')

		$("#cssmin").text(minified);
		//$("#copy-button2").click();
		//$("#notice").css("visibility", "visible");

	} else {
		$("#css").text("Enter CSS here");
		$("#cssmin").text("");
		//$("#notice").css("visibility", "hidden");
	}
}

function clearText(){
	document.getElementById("css").value = "";
	$("#cssmin").text("");
	//$("#notice").css("visibility", "hidden");
}
