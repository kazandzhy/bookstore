var doc = document;

function checkTotal(){

  var sum = 0;
    
 

  for (i=0;i<document.getElementsByName("purchase[]").length;i++) {
    if (document.getElementsByName("purchase[]")[i].checked) {
      var title = document.getElementsByName("purchase[]")[i].value;
      if (title === "Moby Dick" || title === "Pride and Prejudice" 
          || title === "To Kill a Mockingbird") {
          sum += 15;
      }
      else if (title === "Nineteen Eighty-Four" || title === "Wuthering Heights"
               || title === "Jane Eyre") {
          sum += 20;
      }
      else {
          sum += 10;
      }
    }
  }
  document.getElementById("totalprice").innerHTML = '$' + sum;
    
    console.log(document.getElementById("totalprice").innerHTML);
  

  if (document.getElementById("totalprice").innerHTML == "$0")
  {
    document.getElementById("checkoutbutton").style.visibility = 'hidden';
  }
  else
  {
    document.getElementById("checkoutbutton").style.visibility = 'visible';
  }
    
  console.log(document.getElementById("checkoutbutton").style.visibility);
}

function checkOut() {
	if (localStorage.getItem('bookArray')!==null) {
		localStorage.removeItem('bookArray');
	}
	// save book selection into local storage
	var checkboxes = doc.getElementsByClassName("form-check-input");
	var author, title, price;
	var bookObject = [];
	var bookArray = [];
	
	
	for (var i = 0; i < checkboxes.length; i++) {
		if (checkboxes[i].checked == true) {
            
            title = checkboxes[i].parentElement.parentElement.getElementsByClassName("bookTitle")[0].innerText;
            author = checkboxes[i].parentElement.parentElement.getElementsByClassName("bookAuthor")[0].innerText;
            price = checkboxes[i].parentElement.parentElement.getElementsByClassName("bookPrice")[0].innerText;
            
			bookObject = {'title': title, 'author': author, 'price': price};
			bookArray.push(bookObject);
			
		}
	}
	
	localStorage['bookArray'] = JSON.stringify(bookArray);
    
    document.location = "cart.html";
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