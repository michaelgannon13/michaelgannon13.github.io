function handler1(){por.checked=!0,porImg.style.opacity=imgFade,lanImg.style.opacity="1"}function handler2(){lan.checked=!0,lanImg.style.opacity=imgFade,porImg.style.opacity="1"}function handler3(){por.checked=!1,lan.checked=!1}function daFunction(e){var t=e.id;"sm"==t?document.getElementById("social").checked=!0:"pr"==t?document.getElementById("print").checked=!0:"ds"==t?document.getElementById("screen").checked=!0:"web"==t?document.getElementById("wb").checked=!0:"p"==t?document.getElementById("poster").checked=!0:"l"==t?document.getElementById("leaflet").checked=!0:"s"==t?document.getElementById("shelf").checked=!0:"portrait"==t?document.getElementById("por").checked=!0:"landscape"==t?document.getElementById("lan").checked=!0:"pro"==t?document.getElementById("prrr").checked=!0:"ser"==t?document.getElementById("sr").checked=!0:"ev"==t?document.getElementById("event").checked=!0:"txt"==t?document.getElementById("txtRad").checked=!0:"txtImg"==t&&(document.getElementById("txtImgRad").checked=!0)}var pos,leaf,shelf,tab3,next,por,lan,porImg,lanImg;pos=document.getElementById("poster"),leaf=document.getElementById("leaflet"),shelf=document.getElementById("shelf"),tab3=document.getElementById("tab3"),next=document.getElementsByClassName("next"),por=document.getElementById("por"),lan=document.getElementById("lan"),porImg=document.getElementById("porImg"),lanImg=document.getElementById("lanImg");var rad=document.getElementsByTagName("input"),text=document.getElementsByClassName("sel");por.onclick=handler1,lan.onclick=handler2;