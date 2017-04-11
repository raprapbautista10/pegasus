var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,				
				lat: 34.020615,
				lng: -118.451165
			  });
			  
			  var marker = map.addMarker({
				lat: 34.020615,
				lng: -118.451165,
	            title: 'Pegasus Capital Group'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
				lat: -34.397,
				lng: 150.644
		      });
		    });
		}        

    };
}();