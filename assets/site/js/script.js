

( function( $ ) {
jQuery( document ).ready(function() {
jQuery('#cssmenu').prepend('<div id="indicatorContainer"><div id="pIndicator"><div id="cIndicator"></div></div></div>');
    var activeElement = jQuery('#cssmenu>ul>li:first');

    jQuery('#cssmenu>ul>li').each(function() {
        if (jQuery(this).hasClass('active')) {
            activeElement = jQuery(this);
        }
    });


	var posLeft = activeElement.position().left;
	var elementWidth = activeElement.width();
	posLeft = posLeft + elementWidth/2 -6;
	if (activeElement.hasClass('has-sub')) {
		posLeft -= 6;
	}

	jQuery('#cssmenu #pIndicator').css('left', posLeft);
	var element, leftPos, indicator = jQuery('#cssmenu pIndicator');
	
	jQuery("#cssmenu>ul>li").hover(function() {
        element = jQuery(this);
        var w = element.width();
        if (jQuery(this).hasClass('has-sub'))
        {
        	leftPos = element.position().left + w/2 - 12;
        }
        else {
        	leftPos = element.position().left + w/2 - 6;
        }

        jQuery('#cssmenu #pIndicator').css('left', leftPos);
    }
    , function() {
    	jQuery('#cssmenu #pIndicator').css('left', posLeft);
    });

	jQuery('#cssmenu>ul').prepend('<li id="menu-button"><a>Menu</a></li>');
	jQuery( "#menu-button" ).click(function(){
    		if (jQuery(this).parent().hasClass('open')) {
    			jQuery(this).parent().removeClass('open');
    		}
    		else {
    			jQuery(this).parent().addClass('open');
    		}
    	});
});
} )( jQuery );
