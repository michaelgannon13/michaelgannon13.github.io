var emsInput = $('ems').val();
var test = document.getElementById("px").value;
var pixels = "px";
var ems = "em";
var points = "pt";
var percent = "%";


function convert(){
	var ptInput = document.getElementById("pts").value;
	var pxInput = document.getElementById("px").value;
	var emInput = document.getElementById("ems").value;
	var perInput = document.getElementById("perc").value;
	var baseInput = document.getElementById("base").value;

	if (pxInput !== "") {
		
		emsInput = pxInput/baseInput;
		var roundEms = emsInput.toFixed(2);
		document.getElementById("ems").value = roundEms;

		ptInput = pxInput*0.75;
		var roundPts = ptInput.toFixed(0);
		document.getElementById("pts").value = roundPts;

		var perVal = emsInput*100;
		var perValEms = perVal.toFixed(0);
		document.getElementById("perc").value = perValEms;

		pxInput = emsInput*16;

		document.getElementById("ageInputId").value = pxInput;
		document.getElementById("ageInputId2").value = emInput;
		document.getElementById("ageInputId3").value = ptInput;
		document.getElementById("ageInputId4").value = perInput;

		$('#preview').css("font-size", pxInput);
		color();

	} else {
		reset();
	}
}

function convertEm(){
	var ptInput = document.getElementById("pts").value;
	var pxInput = document.getElementById("px").value;
	var emInput = document.getElementById("ems").value;
	var perInput = document.getElementById("perc").value;
	var baseInput = document.getElementById("base").value;

	if (emInput !== "") {
		pxInput = emInput*baseInput;
		newPxVal = pxInput.toFixed(0);
		document.getElementById("px").value = newPxVal;

		var perVal = emInput*100;
		var perValEms = perVal.toFixed(0);
		document.getElementById("perc").value = perValEms;

		ptInput = emInput*12;
		var roundPts = ptInput.toFixed(0);
		document.getElementById("pts").value = roundPts;

		document.getElementById("ageInputId").value = pxInput;
		document.getElementById("ageInputId2").value = emInput;
		document.getElementById("ageInputId3").value = ptInput;
		document.getElementById("ageInputId4").value = perInput;

		$('#preview').css("font-size", pxInput);
		color();

	} else {
		reset();
	}
}

function convertPt(){
	var ptInput = document.getElementById("pts").value;
	var pxInput = document.getElementById("px").value;
	var emInput = document.getElementById("ems").value;
	var perInput = document.getElementById("perc").value;
	var baseInput = document.getElementById("base").value;

	if (ptInput !== "") {

		pxInput = ptInput/0.75;
		newPxVal = pxInput.toFixed(0);
		document.getElementById("px").value = newPxVal;

		emInput = ptInput/12;
		var roundEms = emInput.toFixed(2);
		document.getElementById("ems").value = roundEms;

		var perVal = ptInput*8.333;
		var perValEms = perVal.toFixed(0);
		document.getElementById("perc").value = perValEms;

		document.getElementById("ageInputId").value = pxInput;
		document.getElementById("ageInputId2").value = emInput;
		document.getElementById("ageInputId3").value = ptInput;
		document.getElementById("ageInputId4").value = perInput;

		$('#preview').css("font-size", pxInput);
		color();

	} else {
		reset();
	}
}

function convertPer(){
	var ptInput = document.getElementById("pts").value;
	var pxInput = document.getElementById("px").value;
	var emInput = document.getElementById("ems").value;
	var perInput = document.getElementById("perc").value;
	var baseInput = document.getElementById("base").value;

	if (perInput !== "") {
		
		pxInput = perInput/6.25;
		document.getElementById("px").value = pxInput;

		emInput = perInput/100;
		var roundEms = emInput.toFixed(2);
		document.getElementById("ems").value = roundEms;

		ptInput = perInput/8.333;
		var roundPts = ptInput.toFixed(0);
		document.getElementById("pts").value = roundPts;

		document.getElementById("ageInputId").value = pxInput;
		document.getElementById("ageInputId2").value = emInput;
		document.getElementById("ageInputId3").value = ptInput;
		document.getElementById("ageInputId4").value = perInput;

		$('#preview').css("font-size", pxInput);
		color();

	} else {
		reset();
	}
}

function reset(){
	document.getElementById("px").value = "";
	document.getElementById("px").style.color = "#ccc";
	document.getElementById("ems").value = "";
	document.getElementById("ems").style.color = "#ccc";
	document.getElementById("pts").value = "";
	document.getElementById("pts").style.color = "#ccc";
	document.getElementById("perc").value = "";
	document.getElementById("perc").style.color = "#ccc";
	$('#preview').css("font-size", "16");
}

function color(){
	document.getElementById("px").style.color = "#47D0BD";
	document.getElementById("ems").style.color = "#47D0BD";
	document.getElementById("pts").style.color = "#47D0BD";
	document.getElementById("perc").style.color = "#47D0BD";
}



