$(function(){
	var index = 0;
	
	$(document).ready(function($) {
  		setTimeout(change_banner,5000);	
  		setTimeout(hideFlash,5000);
  		checkEmails();
  		
  		contactForm();
  		workForm();
  		initializeGoogleMaps();
  		
  		scroller();
  		
  		disabled()
  		
  	});
  	
  	function disabled(){
  		$("a.disabled").click(function(){return false;}).tipTip({defaultPosition: "top", delay:50}); 	
  	}
  	
  	function scroller(){
  		var s = $('ul#scroller');
  		if(s && s.size() > 0){
  			setInterval(removeFirst, 3000);	
  		}
  		
		function removeFirst(){
			$('ul#scroller li:first').animate({marginTop:'-=30'}, 700, function(){addLast(this);});
		}
				
		function addLast(first){
			$(first).remove().css({marginTop:'0'}).appendTo($('ul#scroller'));
		}
  	}
  	
  	function workForm(){
  		var c = $('#workwithus-form');
  		if(c && c.size() > 0){
			c.validate({
	  			rules: {
	    			email: {
	      				required: true,
	      				email: true
	    			},
	    			name: {
	    				required: true
	    			},
	    			address: {
	    				required: true
	    			},
	    			phone: {
	    				required: true
	    			},
	    			cv: {
	    				required: true,
	    				accept: "pdf"
	    			},
	    			pap: {
	    				accept: "pdf|ppt|doc|dox|pptx"	
	    			},
	    			privacy: {
	    				required:true	
	    			}
	  			}
	  		});
	  		$("#birthday").datepicker({ dateFormat: 'dd/mm/yy' });
	  	}
  		
  	}
  	
  	function contactForm(){
  		var c = $('#contact-form');
  		if(c && c.size() > 0){
			c.validate({
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
	    			},
	    			privacy: {
	    				required:true	
	    			}
	  			}
	  		});
	  	}
  	}
  	
  	
  	function initializeGoogleMaps() {
  		var canv = $('#google_map');
  		if(canv && canv.size() > 0){
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
  	
  	function hideFlash(){
  		$('h3.flash-message').each(function(){
  			$(this).fadeOut();
  		});
  	}
  	
  	function checkEmails(){
  		$('a[rel=nofollow]').each(function(index) {
  			$(this).text($(this).attr('href')+'@mblex.it').attr('href','mailto:'+$(this).text());
  		});
  	}
});