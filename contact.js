var doc = document;
function generateURL() {
	var address = document.getElementById("addressPicker").value;
    var url = 'https://api.tomtom.com/search/2/geocode/' + address + '.json?key=hmKtbkhgSzZivWLig6YXpxklVxoRr7Fr';
    
    loadJSON(url);
}


function loadJSON(url) {   

	//jsonRequest = false;
    jsonRequest = new XMLHttpRequest();
    jsonRequest.open('GET', url, true);
    jsonRequest.onreadystatechange = function () {
          if (jsonRequest.readyState == 4 && jsonRequest.status == "200") {
			json = JSON.parse(jsonRequest.responseText);
            //console.log(json);
            
            var latitude = json.results[0].position.lat;
            var longitude = json.results[0].position.lon;
			
            initMap(latitude, longitude);
          }
    };
    jsonRequest.send();  
}


doc.getElementById('addressPicker').addEventListener('change', generateURL);

function initMap(latitude, longitude) {
	var uluru = {lat: latitude, lng: longitude};
	var map = new google.maps.Map(doc.getElementById('map'), {
	  zoom: 15,
	  center: uluru
	});
	var marker = new google.maps.Marker({
	  position: uluru,
	  map: map
	});
}
  
// code adapted from https://stackoverflow.com/questions/2264072/detect-a-finger-swipe-through-javascript-on-the-iphone-and-android
//doc.addEventListener('touchstart', handleTouchStart, false);        
//doc.addEventListener('touchmove', handleTouchMove, false);
//
//var xDown = null;                                                        
//var yDown = null;                                                        
//
//function handleTouchStart(evt) {                                         
//    xDown = evt.touches[0].clientX;                                      
//    yDown = evt.touches[0].clientY;                                      
//};                                                
//
//function handleTouchMove(evt) {
//    if ( ! xDown || ! yDown ) {
//        return;
//    }
//
//    var xUp = evt.touches[0].clientX;                                    
//    var yUp = evt.touches[0].clientY;
//
//    var xDiff = xDown - xUp;
//    var yDiff = yDown - yUp;
//
//    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
//        if ( xDiff <= 0 ) {
//			/* right swipe */
//            window.location.href = "http://w3playground.com/bookstore/shop.html";
//        }                       
//    }
//    /* reset values */
//    xDown = null;
//    yDown = null;                                             
//};

