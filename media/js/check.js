var width;
var height;
var units = "px";


// quick search regex
var qsRegex;
var buttonFilter;



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

      $('#gen-media').text(media + "\n" + maxWidth + "\n" + maxHeight + "\n" + css + brack);
      $('#myModal').modal();
  }


// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  filter: function() {
    var $this = $(this);
    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
    return searchResult && buttonResult;
  }
});

$('#filters').on( 'click', 'button', function() {
  buttonFilter = $( this ).attr('data-filter');
  $grid.isotope();
});

// use value of search field to filter
var $search = $('.quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $search.val(), 'gi' );
  $grid.isotope();
}, 200 ) );

  // change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

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
    setTimeout( delayed, threshold || 100 );
  };
}











