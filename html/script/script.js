
<<<<<<< HEAD
radio = {}; 

radio.init = function() {
	
	radio.center = new LatLonPoint(51.548470058664954, -0.0556182861328125);

	// set zoom 
	radio.zoom = 11;
	
	//draw start map 
	radio.start_map = new Mapstraction('start_map','openstreetmap');					
	
	radio.start_map.setCenterAndZoom(radio.center, radio.zoom);
	radio.start_map.addControls({
		pan: true, 
		zoom: 'small',
		map_type: true 
	});
	
	//draw end map 
	radio.end_map = new Mapstraction('end_map','openstreetmap');
	radio.end_map.setCenterAndZoom(radio.center, radio.zoom);
	radio.end_map.addControls({
		pan: true, 
		zoom: 'small',
		map_type: true 
	});
	
	radio.advancedMarker();
};

radio.advancedMarker = function (map) {
    radio.start_map.addMarkerWithData(new mxn.Marker(radio.center),{
        label : "start",
        date : "new Date()",
        marker : 4,


        iconSize : [20,20],
        draggable : true,
        hover : true
    });

    radio.end_map.addMarkerWithData(new mxn.Marker(radio.center),{
        label : "end",
        date : "new Date()",
        marker : 4,

        iconSize : [20,20],
        draggable : true,
        hover : true
    });
    
}

			
$(document).ready(function() {
	radio.init();
}); 
=======
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

>>>>>>> 4a742a625fb6731ed1e7f62719de30af49f6982a
