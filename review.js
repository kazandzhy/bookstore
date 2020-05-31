var doc = document;

window.onload = function(){
	if (localStorage.getItem('bookArray')!==null) {
		var bookArray = JSON.parse(localStorage['bookArray']);
		
		var result = '';
        
		for (var i = 0; i < bookArray.length; i++) {
			result += "- " + '<i>"' + bookArray[i].title + '"</i><br>';
			result += bookArray[i].author + ' - ' + bookArray[i].price + '<br><br>';
		}	
        
		doc.getElementById('selectedItems').innerHTML = result;
	}
};