$(function(){
	var index = 0;
	
	$(document).ready(function($) {
  		setTimeout(change_banner,5000);	
  		checkEmails();
  	});
  	
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