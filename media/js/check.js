var width;
var height;
var units = "px";



function getMediaQuery(val){
  var check = $(val).attr("value");
    if(check == "ML640XL"){
      width = 720 + units;
      height = 1280 + units;



      var media = "@media only screen ";
      var maxHeight = "and (max-height : " + height + ") "
      var maxWidth = "and (max-width : " + width + ") {}" 

      alert(media + maxHeight + maxWidth);
      } 
  }