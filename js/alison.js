//;(function($) {
$.widget( "ui.timespinner", $.ui.spinner, {
	options: {
		// seconds
		step: 900 * 1000,
		// hours
		page: 60
	},

	_parse: function( value ) {
		if ( typeof value === "string" ) {
			// already a timestamp
			if ( Number( value ) == value ) {
				return Number( value );
			}
			return +Globalize.parseDate( value );
		}
		return value;
	},

	_format: function( value ) {
		return Globalize.format( new Date(value), "t" );
	}
});

    "use strict";
    $(document).ready(function() {
    	//--------SEE WHY--------//
    	function scrollTo(trigger, target, offset, speed) {
			$(trigger).click(function (e) {
	            e.preventDefault();
	            $('html, body').animate({
	                scrollTop: $(target).offset().top + offset
	            }, speed);
		    });
		}

		scrollTo(".see-why", ".home-section.first", 0, 1000);

		//--------SLIDE--------//
		$('#slides').slidesjs({
	        width: 1200,
	        height: 555,
	        navigation: {
	        	// /active: false,
	         	effect: "fade"
	        },
	        pagination: {
        		active: false,
	          	effect: "fade"
	        },
	        effect: {
	          fade: {
	            speed: 400
	          }
	        },
        });

    	//--------MAP--------//
		if ( $('#map-canvas').length ) {
			var map_styles = [{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]}];
			var myOptions = {
				zoom: 14,
				center: new google.maps.LatLng(40.652908, -73.9525936),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false,
				styles: map_styles
			};

			var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
		}

		//--------FORMS--------//
		$('input, textarea').placeholder();
		
        $('#general, #technician, #appointment, #prescription').ajaxForm({
            dataType: 'json',
            beforeSubmit:  beforeSubmit,
            success: formResponse
        });

        function beforeSubmit(data) { 
            $('.active .ajax-loader').addClass('active');
        }

        function formResponse(data) { 
            var alertbox = $('.active .form-response');

            if (data.success) {
                console.log('success');
            } else {
                console.log('fail');
            }

            $('.ajax-loader.active').removeClass('active');
            alertbox.html(data.message);
        }

        //--------FORMS-NAV--------//
		$('.forms-nav ul li').on('click', function() {
			$('.forms-nav ul li.active').removeClass('active');
		})

		//--------DATE-PICKER--------//
		$( "#appointment-date" ).datepicker();
		 
		 //--------TIME-PICKER--------//
		$( "#appointment-time" ).timespinner();

		$( "#culture" ).change(function() {
			var current = $( "#appointment-time" ).timespinner( "value" );
			Globalize.culture( $(this).val() );
			$( "#appointment-time" ).timespinner( "value", current );
		});

	});
//})
