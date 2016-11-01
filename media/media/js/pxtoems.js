var emsInput = $('ems').val();
var pixels = "px";
var ems = "em";
var points = "pt";
var percent = "%";

function convert(){
	var pxInput = document.getElementById("px").value;
	var baseInput = document.getElementById("base").value;

	if (pxInput !== "") {
		
		emsInput = pxInput/baseInput;
		var roundEms = emsInput.toFixed(3) + ems;

		var perVal = emsInput*100;
		var perValEms = perVal.toFixed(1) + percent;

		ptInput = pxInput*0.75;
		var roundPts = ptInput.toFixed(0) + points;

		document.getElementById("ems").value = roundEms;
		document.getElementById("ems").style.color = "#47D0BD";

		document.getElementById("pts").value = roundPts;
		document.getElementById("pts").style.color = "#47D0BD";

		document.getElementById("perc").value = perValEms;
		document.getElementById("perc").style.color = "#47D0BD";

	} else {
		document.getElementById("ems").value = "Ems";
		document.getElementById("ems").style.color = "#ccc";

		document.getElementById("pts").value = "Pts";
		document.getElementById("pts").style.color = "#ccc";

		document.getElementById("perc").value = "%";
		document.getElementById("perc").style.color = "#ccc";
	}
}

// function convertEm(){
// 	var emInput = document.getElementById("ems").value;
// 	var baseInput = document.getElementById("base").value;

// 	if (emInput !== "") {
		
// 		emsInput = emInput*baseInput;
// 		var roundEms = emsInput.toFixed(0) + "px";

// 		var perVal = emsInput*100;
// 		var perValEms = perVal.toFixed(1) + percent;

// 		ptInput = emInput*12;
// 		var roundPts = ptInput.toFixed(0) + points;

// 		document.getElementById("px").value = roundEms;
// 		document.getElementById("px").style.color = "#47D0BD";

// 		document.getElementById("pts").value = roundPts;
// 		document.getElementById("pts").style.color = "#47D0BD";

// 		document.getElementById("perc").value = perValEms;
// 		document.getElementById("perc").style.color = "#47D0BD";

// 	} else {
// 		document.getElementById("ems").value = "Ems";
// 		document.getElementById("ems").style.color = "#ccc";

// 		document.getElementById("pts").value = "Pts";
// 		document.getElementById("pts").style.color = "#ccc";

// 		document.getElementById("perc").value = "%";
// 		document.getElementById("perc").style.color = "#ccc";
// 	}
// }

// function convertPt(){
// 	var pxInput = document.getElementById("px").value;
// 	var baseInput = document.getElementById("base").value;

// 	if (pxInput !== "") {
		
// 		emsInput = pxInput/baseInput;
// 		var roundEms = emsInput.toFixed(3) + ems;

// 		var perVal = emsInput*100;
// 		var perValEms = perVal.toFixed(1) + percent;

// 		ptInput = pxInput*0.75;
// 		var roundPts = ptInput.toFixed(0) + points;

// 		document.getElementById("ems").value = roundEms;
// 		document.getElementById("ems").style.color = "#47D0BD";

// 		document.getElementById("pts").value = roundPts;
// 		document.getElementById("pts").style.color = "#47D0BD";

// 		document.getElementById("perc").value = perValEms;
// 		document.getElementById("perc").style.color = "#47D0BD";

// 	} else {
// 		document.getElementById("ems").value = "Ems";
// 		document.getElementById("ems").style.color = "#ccc";

// 		document.getElementById("pts").value = "Pts";
// 		document.getElementById("pts").style.color = "#ccc";

// 		document.getElementById("perc").value = "%";
// 		document.getElementById("perc").style.color = "#ccc";
// 	}
// }

// function convertPer(){
// 	var pxInput = document.getElementById("px").value;
// 	var baseInput = document.getElementById("base").value;

// 	if (pxInput !== "") {
		
// 		emsInput = pxInput/baseInput;
// 		var roundEms = emsInput.toFixed(3) + ems;

// 		var perVal = emsInput*100;
// 		var perValEms = perVal.toFixed(1) + percent;

// 		ptInput = pxInput*0.75;
// 		var roundPts = ptInput.toFixed(0) + points;

// 		document.getElementById("ems").value = roundEms;
// 		document.getElementById("ems").style.color = "#47D0BD";

// 		document.getElementById("pts").value = roundPts;
// 		document.getElementById("pts").style.color = "#47D0BD";

// 		document.getElementById("perc").value = perValEms;
// 		document.getElementById("perc").style.color = "#47D0BD";

// 	} else {
// 		document.getElementById("ems").value = "Ems";
// 		document.getElementById("ems").style.color = "#ccc";

// 		document.getElementById("pts").value = "Pts";
// 		document.getElementById("pts").style.color = "#ccc";

// 		document.getElementById("perc").value = "%";
// 		document.getElementById("perc").style.color = "#ccc";
// 	}
// }