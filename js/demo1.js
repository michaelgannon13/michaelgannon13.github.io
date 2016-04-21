(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
		overlay = document.querySelector( 'div.overlay' ),
		hide = document.getElementsByClassName('menu-hide'),
		closeBttn = overlay.querySelector( 'button.overlay-close' ),
		menuItem1 = overlay.querySelector( 'a.menu-hide1' );
		menuItem2 = overlay.querySelector( 'a.menu-hide2' );
		menuItem3 = overlay.querySelector( 'a.menu-hide3' );
		menuItem4 = overlay.querySelector( 'a.menu-hide4' );

		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
	menuItem1.addEventListener( 'click', toggleOverlay );
	menuItem2.addEventListener( 'click', toggleOverlay );
	menuItem3.addEventListener( 'click', toggleOverlay );
	menuItem4.addEventListener( 'click', toggleOverlay );

})();