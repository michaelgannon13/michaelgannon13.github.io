var emsInput = $('ems').val();

function convert(){
	var pxInput = document.getElementById("px").value;
	var baseInput = document.getElementById("base").value;
	if (pxInput !== "") {
		
		emsInput = pxInput/baseInput;
		var roundEms = emsInput.toFixed(2);
		document.getElementById("ems").value = roundEms;
		document.getElementById("ems").style.color = "#fc5185";
	} else {
		document.getElementById("ems").value = "Ems";
		document.getElementById("ems").style.color = "#ccc";
	}

	var num = "987238";

	if(num.match(/^\d+$/)){
	  //valid integer
	}else if(num.match(/^\d+\.\d+$/)){
	  //valid float
	}else{
	  //not valid number
	}
}