

radio = {};

radio.getPlaylist = function() {
	$.get('music.php', function(data) {
	  $('#playlist').html(data);
	});					
};


radio.getUsers = function() {
	$.get('users.php', function(data) {
	  $('#userlist').html(data);
	});					
};

$(document).ready(function(){
	setInterval("radio.getUsers()",2000);
	setInterval("radio.getPlaylist()",2000);
})