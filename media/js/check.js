var width;
var height;
var units = "px";

function getMediaQuery(width, height){

      width = width + units;
      height = height + units;

      var media = "@media only screen ";
      var maxWidth = "and (max-width : " + width + ") "
      var maxHeight = "and (max-height : " + height + ") {}" 

      alert(media + maxWidth + maxHeight);

      $('#myModal').modal();   
  }