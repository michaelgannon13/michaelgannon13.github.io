function minify(){
	var css = document.getElementById("css").value;
	var cssMin = document.getElementById("cssmin").value;

	if (css !== "") {
		var minified = css.replace(/\s/g,'')

		$("#cssmin").text(minified);

		document.getElementById("perc").value = perValEms;
		document.getElementById("perc").style.color = "#47D0BD";
	} else {
		$("#css").text("Enter CSS here");
		$("#cssmin").text("");
	}
}
