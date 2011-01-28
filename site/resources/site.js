$(function(){
	var index = 0;
	
	$(document).ready(function($) {
  		setTimeout(change_banner,5000);	
  		checkEmails();
  		
  		$('#contact-form').validate({
  			rules: {
    			email: {
      				required: true,
      				email: true
    			},
    			name: {
    				required: true
    			},
    			job: {
    				required: true
    			},
    			company: {
    				required: true	
    			},
    			message: {
    				required: true
    			}
  			}
  		});
  		
  		initializeGoogleMaps();
  		
  		
  	});
  	
  	
  	function initializeGoogleMaps() {
  		var canv = $('#google_map');
  		if(canv){
	    	var latlng = new google.maps.LatLng(45.4714904,9.2045950);
	    	var myOptions = {
	      		zoom: 15,
	      		center: latlng,
	      		mapTypeId: google.maps.MapTypeId.ROADMAP
	    	};
	    	var map = new google.maps.Map(document.getElementById('google_map'),myOptions);
	    	var companyPos = new google.maps.LatLng(45.4714904,9.2045950);
			var companyMarker = new google.maps.Marker({
				position: companyPos,
			    map: map,
			    title:"Bicecci & Partners"
			});
	    }
  	}
  	
  	function change_banner(){
  		var b = $('div.main-banner');
  		if(b != null) {
  			index = index + 1;
  			$(b).css('background-position-y', function(i) {
  				var val = index * 152;
  				if(index == 3) {
  					index = -1;
  				}
  				return '-'+val+'px';
			});	
			setTimeout(change_banner,5000);	
  		}
  	}
  	
  	function checkEmails(){
  		$('a[rel=nofollow]').each(function(index) {
  			$(this).text($(this).attr('href')+'@mblex.it').attr('href','mailto:'+$(this).text());
  		});
  	}
});