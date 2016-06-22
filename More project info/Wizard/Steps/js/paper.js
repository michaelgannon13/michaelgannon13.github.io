var imgs = document.getElementsByClassName("find"),
ticks = document.getElementsByClassName("findTick"),
radio = document.getElementsByClassName("hideMe"), 
bor = document.getElementsByClassName("thumbnail"), 
num = imgs.length,  
tick = ticks.length,  
imgArr = [],
imgFade = 0.3;
  
  // Images pushed to array
  if (num > 0){
    for (var i = 0; i < num; i++){
        imgArr.push(imgs[i].src)
    }
  }

  // ticks image & tick opacity
  function reset(){
    for (var j = 0, i = 0; (j < imgs.length) && (i < ticks.length); j++, i++) {
        imgs[j].style.opacity = "1";
        ticks[i].style.opacity = "0";
        radio[i].checked = false;
        bor[i].style.border = "1px solid #ddd";
    }
  }

  function changeIt(pass){
    var name = pass.src;

    // Check if it's already ticked
    if (pass.style.opacity != imgFade) {
        reset();
        for (var w = 0; w < imgArr.length; w++){
          if (imgArr[w] == name) {
             pass.style.opacity = imgFade;
             // The tick we land on will be the same index as the 
             // image we land on because they both have the same length
             ticks[w].style.opacity = "1";
             radio[w].checked = true;
             bor[w].style.border = "1px dashed #3ea4d9";
          } 
        }
    } else {
      reset();
    }
  }
