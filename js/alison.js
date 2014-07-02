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
	        play: {
				interval: 5000,
				effect: "fade",
				auto: true,
			},
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

        //--------ABOUT-HEADER-NAV--------//
		$('.about-header-nav ul li').on('click', function() {
			$('.about-header-nav ul li.active').removeClass('active');
		})

    	//--------MAP--------//
		if ( $('#map-canvas').length ) {
			var map_styles = [{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"simplified","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]}];
			var myLatlng = new google.maps.LatLng(40.659699, -73.980956);
			var myOptions = {
				zoom: 15,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false,
				styles: map_styles,
                animation: google.maps.Animation.BOUNCE
			};

			var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);

			var image = {
			    url: '/images/alisons-marker.png',
			    scaledSize: new google.maps.Size(73, 81)
		  	};

			var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				icon: image,
				url: 'https://www.google.com/maps/preview?q=224+PROSPECT+PARK+WEST+BROOKLYN,+NY+11215&ie=UTF-8&hq=&hnear=0x89c25b1e6ee19a55:0xbb52bbd33c51cf9b,224+Prospect+Park+West,+Brooklyn,+NY+11215&gl=us&ei=cct8U7zqB6LlsAT75oHoCw&ved=0CCcQ8gEwAA',
				animation: google.maps.Animation.BOUNCE,
			});

			google.maps.event.addListener(marker, 'click', function() {
	            window.open(this.url);
	        });
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
               
            } else {
                
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


		//--------COMING SOON--------//
		if (document.cookie.replace(/(?:(?:^|.*;\s*)alisonvisited\s*\=\s*([^;]*).*$)|^.*$/, "$1") !== "true") {
			$('#coming-soon-modal').modal('show');
        	document.cookie = "alisonvisited=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
        }

	});
//})
