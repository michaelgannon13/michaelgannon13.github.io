var pxInput = $('px').val();
var emsInput = $('ems').val();
var emBase = 16;

function convert(px){

	var enteredPX = px; 

	if (pxInput !== "") {
		emsInput = enteredPX/emBase;
		document.getElementById("ems").value = enteredPX/emBase;
	} else {
		console.log("nothing in px field")
	}
}