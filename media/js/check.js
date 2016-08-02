var width;
var height;
var units = "px";

function getMediaQuery(width, height){
      $("#copy-button").text("Copy");
      $("#copy-button").css("background-color", "#337ab7").css("border-color", "#337ab7").css("font-weight", "500");

      width = width + units;
      height = height + units;

      var media = "@media only screen ";
      var maxWidth = "   " + "and (max-width : " + width + ") ";
      var maxHeight = "   " + "and (max-height : " + height + ") " + "{" ;
      var css = "   " + "/* CSS here */" ;
      var brack = "\n" + "}";



      ///alert(media + maxWidth + maxHeight);

      $('#gen-media').text(media + "\n" + maxWidth + "\n" + maxHeight + "\n" + css + brack);

      $('#myModal').modal();
  }