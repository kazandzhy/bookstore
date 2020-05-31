var doc = document;

function checked(theClass){
	var span = doc.getElementsByClassName(theClass)[0];
	var myDiv = this;
	setTimeout(function() {
		span.textContent = "";		
	}, 200);
	span.id = "checkmark";
}

function required(theClass){
	var span = doc.getElementsByClassName(theClass)[0];
	span.textContent = "Required";
		span.style = "";
		span.id = "";
}
	
function validateField(field, theClass){
	
    if(field != "") {		
		checked(theClass);
	}
    else {
		required(theClass);
	}
}

function validatePhone(field, theClass){

    if(field.match(/^\s*\d{3}\-\d{3}\-\d{4}\s*$/)){
        checked(theClass);
	}
     else if(field.match(/^\s*\d{10}\s*$/)){
        checked(theClass);
	}
    else{
		required(theClass);
	}
}

function validateDropdown(field, theClass){
	
    if(field != "")
        checked(theClass);
    else
        required(theClass); 
}

function validateZip(field, theClass){

    if(field.match(/^\s*\d{5}\s*$/))
        checked(theClass);
    else
        required(theClass);
}

function validateCredit(field, theClass){

    if(field.match(/^\s*(\d{16})\s*$|^\s*(\d{4}\s\d{4}\s\d{4}\s\d{4})\s*$/))
        checked(theClass);
    else
        required(theClass);
}

function validateSecurity(field, theClass){

    if(field.match(/^\s*\d{3}\s*$/))
        checked(theClass);
    else
        required(theClass);
}

function resetForm(){
    location.reload();
}

function submitForm(){
    var x = doc.getElementsByTagName("span");
    var i;
    var wrong = 0;
    for (i = 0; i < x.length; i++) {
        if (x[i].textContent == 'Required')
          wrong++;
    }
      
    if (wrong > 0){
      alert("Please fill all the fields correctly.");
      return false;
    }
    else{
      return true;
    }
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
//        if ( xDiff > 0 ) {
//			/* left swipe */
//            window.location.href = "http://w3playground.com/bookstore/contact.html";
//        } else {
//			/* right swipe */
//            window.location.href = "http://w3playground.com/bookstore/home.html";
//        }                       
//    }
//    /* reset values */
//    xDown = null;
//    yDown = null;                                             
//};