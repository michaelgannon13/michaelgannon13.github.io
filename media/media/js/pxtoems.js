var emsInput = $('ems').val();
var pixels = "px";
var ems = "em";
var points = "pt";
var percent = "%";

function reset(){
	document.getElementById("px").value = "";
	document.getElementById("px").style.color = "#ccc";
	document.getElementById("ems").value = "";
	document.getElementById("ems").style.color = "#ccc";
	document.getElementById("pts").value = "";
	document.getElementById("pts").style.color = "#ccc";
	document.getElementById("perc").value = "";
	document.getElementById("perc").style.color = "#ccc";
}

function color(){
	document.getElementById("px").style.color = "#47D0BD";
	document.getElementById("ems").style.color = "#47D0BD";
	document.getElementById("pts").style.color = "#47D0BD";
	document.getElementById("perc").style.color = "#47D0BD";
}

function convert(){
	var pxInput = document.getElementById("px").value;
	var baseInput = document.getElementById("base").value;

	if (pxInput !== "") {
		
		emsInput = pxInput/baseInput;
		var roundEms = emsInput.toFixed(2);

		var perVal = emsInput*100;
		var perValEms = perVal.toFixed(0);

		ptInput = pxInput*0.75;
		var roundPts = ptInput.toFixed(0);

		document.getElementById("ems").value = roundEms;

		document.getElementById("pts").value = roundPts;

		document.getElementById("perc").value = perValEms;

		color();

	} else {
		reset();
	}
}

function convertEm(){
	var emInput = document.getElementById("ems").value;
	var pxInput = document.getElementById("px").value;
	var baseInput = document.getElementById("base").value;

	if (emInput !== "") {
		pxInput = emInput*baseInput;
		document.getElementById("px").value = pxInput;

		var perVal = emInput*100;
		var perValEms = perVal.toFixed(0);
		document.getElementById("perc").value = perValEms;

		ptInput = emInput*12;
		var roundPts = ptInput.toFixed(0);
		document.getElementById("pts").value = roundPts;

		color();

	} else {
		reset();
	}
}

function convertPt(){
	var ptInput = document.getElementById("pts").value;
	var pxInput = document.getElementById("px").value;
	var baseInput = document.getElementById("base").value;

	if (ptInput !== "") {

		pxInput = ptInput/0.75;
		document.getElementById("px").value = pxInput;

		emInput = ptInput/12;
		var roundEms = emInput.toFixed(0);
		document.getElementById("ems").value = roundEms;

		var perVal = ptInput*8.333;
		var perValEms = perVal.toFixed(0);
		document.getElementById("perc").value = perValEms;

		color();

	} else {
		reset();
	}
}

function convertPer(){
	var perInput = document.getElementById("perc").value;
	var pxInput = document.getElementById("px").value;
	var baseInput = document.getElementById("base").value;

	if (perInput !== "") {
		
		pxInput = perInput/6.25;
		document.getElementById("px").value = pxInput;

		emInput = perInput/100;
		var roundEms = emInput.toFixed(0);
		document.getElementById("ems").value = roundEms;

		ptInput = perInput/8.333;
		var roundPts = ptInput.toFixed(0);
		document.getElementById("pts").value = roundPts;

		color();

	} else {
		reset();
	}
}






