var width;
var height;
var units = "px";


// quick search regex
var qsRegex;

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  filter: function() {
    return qsRegex ? $(this).text().match( qsRegex ) : true;
  }
});

// use value of search field to filter
var $quicksearch = $('.quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  $grid.isotope();
}, 200 ) );

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  return function debounced() {
    if ( timeout ) {
      clearTimeout( timeout );
    }
    function delayed() {
      fn();
      timeout = null;
    }
    timeout = setTimeout( delayed, threshold || 100 );
  }
}


function getMediaQuery(width, height){
      $("#copy-button").text("Copy");
      $("#copy-button").css("background-color", "#337ab7").css("border-color", "#337ab7").css("font-weight", "500");

      width = width + units;
      height = height + units;

      var media = "@media only screen ";
      var maxWidth = "   " + "and (max-width : " + width + ") ";
      var maxHeight = "   " + "and (max-height : " + height + ") " + "{" ;
      var css = "   " + "/* Styles here */" ;
      var brack = "\n" + "}";



      ///alert(media + maxWidth + maxHeight);

      $('#gen-media').text(media + "\n" + maxWidth + "\n" + maxHeight + "\n" + css + brack);

      $('#myModal').modal();
  }