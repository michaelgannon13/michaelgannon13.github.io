var cssMin = document.getElementById("cssmin").value;

function minify(){

	if (css !== "") {
		var css = document.getElementById("css").value;
		var minified = css.replace(/\s/g,'').replace(/(\/\*([\s\S]*?)\*\/)|(\/\/(.*)$)/gm, '');;


		$("#cssmin").text(minified);

	} else {
		$("#css").text("Enter CSS here");
		$("#cssmin").text("");
	}
}

function clearText(){
	document.getElementById("css").value = "";
	$("#cssmin").text("");

	 $("#copy-button2").text("Copy");
      $("#copy-button2").css("background-color", "#E82597").css("border-color", "#E82597").css("font-weight", "900");
      $("#ems").css("border-color", "#47D0BD");
      $("#ems").css("color", "#47D0BD").css("border-width", "12px");
}
