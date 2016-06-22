  var pos, leaf, shelf, tab3, next, por, lan, porImg, lanImg;
  pos = document.getElementById('poster');
  leaf = document.getElementById('leaflet'); 
  shelf = document.getElementById('shelf');
  tab3 = document.getElementById('tab3');
  next = document.getElementsByClassName('next');
  por = document.getElementById("por"); 
  lan = document.getElementById("lan");
  porImg = document.getElementById("porImg");
  lanImg = document.getElementById("lanImg"); 

  var rad = document.getElementsByTagName("input");
  var text = document.getElementsByClassName('sel');

  por.onclick = handler1;
  lan.onclick = handler2;

  function handler1() { 
    por.checked = true;
    porImg.style.opacity = imgFade;
    lanImg.style.opacity = "1";
  }

  function handler2() {
    lan.checked = true;
    lanImg.style.opacity = imgFade;
    porImg.style.opacity = "1";
  } 
  
  function handler3(){
    por.checked = false;
    lan.checked = false;
  }

 // text click
 function daFunction(id){
    var radQues = id.id;

    if (radQues == "sm") {
      document.getElementById("social").checked = true;
    } else if (radQues == "pr") {
      document.getElementById("print").checked = true;
    } else if (radQues == "ds") {
      document.getElementById("screen").checked = true;
    } else if (radQues == "web") {
      document.getElementById("wb").checked = true;
    } else if (radQues == "p") {
      document.getElementById("poster").checked = true;
    } else if (radQues == "l") {
      document.getElementById("leaflet").checked = true;
    } else if (radQues == "s") {
      document.getElementById("shelf").checked = true;
    } else if (radQues == "portrait") {
      document.getElementById("por").checked = true;
    } else if (radQues == "landscape") {
      document.getElementById("lan").checked = true;
    } else if (radQues == "pro") {
      document.getElementById("prrr").checked = true;
    } else if (radQues == "ser") {
      document.getElementById("sr").checked = true;
    } else if (radQues == "ev") {
      document.getElementById("event").checked = true;
    } else if (radQues == "txt") {
      document.getElementById("txtRad").checked = true;
    } else if (radQues == "txtImg") {
      document.getElementById("txtImgRad").checked = true;
    }
  }
