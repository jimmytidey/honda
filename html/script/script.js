
home = {}; 

home.sort = function() {	
	 
 	if (self.document.location.hash){ 
			$("#options a").attr('class', ''); 
			home.filter_class = "."+self.document.location.hash;
			home.filter_class = home.filter_class.replace('#', "");
			$('#isotope_container').isotope({filter: home.filter_class});
			$('#options [href="'+self.document.location.hash+'"]').attr('class', 'selected');
	}
	else {
		$('#isotope_container').isotope({filter: '.skills'});		
	}
	
}

$(document).ready(function() {
	home.sort(); 
	//When I'm not in a hurry I'll implement this with http://isotope.metafizzy.co/demos/hash-history.html#filter=.post-transition
	hashChangeEventListener = setInterval("home.sort()", 50);
});

