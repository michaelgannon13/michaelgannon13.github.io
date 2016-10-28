var emsInput = $('ems').val();

function convert(){
	var pxInput = document.getElementById("px").value;
	var baseInput = document.getElementById("base").value;
	if (pxInput !== "") {
		
		emsInput = pxInput/baseInput;
		var roundEms = emsInput.toFixed(2);

		var perVal = emsInput*100;
		var perValEms = perVal.toFixed(2);

		ptInput = pxInput*0.75;
		var roundPts = ptInput.toFixed(2);

		document.getElementById("ems").value = roundEms;
		document.getElementById("ems").style.color = "#fc5185";

		document.getElementById("pts").value = roundPts;
		document.getElementById("pts").style.color = "#fc5185";

		document.getElementById("perc").value = perValEms;
		document.getElementById("perc").style.color = "#fc5185";
	} else {
		document.getElementById("ems").value = "Ems";
		document.getElementById("ems").style.color = "#ccc";

		document.getElementById("pts").value = "Pts";
		document.getElementById("pts").style.color = "#ccc";

		document.getElementById("perc").value = "%";
		document.getElementById("perc").style.color = "#ccc";
	}
}