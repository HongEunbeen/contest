                           
                                  function initialize() {                                
	                                  var myLatlng = new google.maps.LatLng(37.578190, 127.007185); // y, x좌표값   
	                                  var mapOptions = {                                 
	                                        zoom: 15,                                 
	                                        center: myLatlng,                                
	                                        mapTypeId: google.maps.MapTypeId.ROADMAP                                 
	                                  }                                                                 
	                                  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);  
	                                  
	                                  var star = new google.maps.Marker({                                 
                                            position: myLatlng,                                 
                                            map: map,                                 
                                            title: "이화벽화마을"                                
	                                  });                               
	                                  var infowindow_star = new google.maps.InfoWindow(                                
	                                          {                               
	                                            content: "<h1><font color = 'black'>이화벽화마을</font></h1>",                                 
	                                            maxWidth: 300                                 
	                                          }                                
	                                  );                                                                                                
	                                  google.maps.event.addListener(star, 'click', function() {                                 
	                                	  infowindow_star.open(map, star);                                
                                  		});                                
                                  } 
                            
                                  window.onload = function() {
                                	    initialize();
                                  }