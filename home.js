var doc = document;

window.onload = function(){
		
	//reference to canvas
	var canvas = doc.getElementById("myLogo"),
	
	context = canvas.getContext("2d"),
	
	c = context;
	
	c.fillStyle = "antiquewhite";
	
	//draw circle
	c.fillStyle = "#0b6e4f";
	//300-start x, 180-start y, 50-radius,0 - starting point, Math.PI-ending point, true/false - direction
	c.arc(50, 15, 15, 0, Math.PI * 2, false);
	c.fill();
	
	//many lines
	c.fillStyle = "#0b6e4f";
	c.lineWidth = 1;
	c.beginPath();
	c.moveTo(50, 40);
	c.lineTo(15, 25);
	c.lineTo(15, 32);
	c.lineTo(50, 43);
	c.lineTo(85, 32);
	c.lineTo(85, 25);	
	c.closePath();
	c.fill();
	
	c.fillStyle = "#fa9f42";
	c.lineWidth = 1;
	c.beginPath();
	c.moveTo(50, 45);
	c.lineTo(8, 32);
	c.lineTo(20, 70);
	c.lineTo(15, 39);
	c.lineTo(50, 52);
	c.lineTo(85, 39);
	c.lineTo(80, 70);
	c.lineTo(92, 32);
	c.closePath();
	c.fill();
	
};


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
//        if ( xDiff > 0 ) {
//			/* left swipe */ 
//			window.location.href = "http://w3playground.com/bookstore/shop.html";
//        }              
//    }
//    /* reset values */
//    xDown = null;
//    yDown = null;                                             
//};