var emsInput = $('ems').val();

function convert(){

	if (pxInput !== "") {
		var pxInput = document.getElementById("px").value;
		var baseInput = document.getElementById("base").value;
		emsInput = pxInput/baseInput;
		document.getElementById("ems").value = pxInput/baseInput;
	} else {
		document.getElementById("ems").value = "";
	}
	//setInterval(convert, 500);
}