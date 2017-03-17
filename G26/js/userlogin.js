function clicked() { 

var firstname = document.getElementById('firstname');
var lastname = document.getElementById('lastname');
var email = document.getElementById('email');
var message = document.getElementById('message');

if(firstname.value !="") {

if(lastname.value !="") {

if(email.value !="") {

if(message.value !="") {


	window.alert("Message Sent Successfully!");

										}
else { 

	window.alert("Please make sure all fields are filled.");
	return false;  

	 }												

		

									}
else { 

	window.alert("Please make sure all fields are filled.");
	return false; 

	 }		


								}	
else { 

	window.alert("Please make sure all fields are filled.");
	return false;

	 }		


							}
else { 

	window.alert("Please make sure all fields are filled.");
	return false; 

	 }		
	

						}	



// Get the modal
var modal = document.getElementById('userlogin');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal2
var modal = document.getElementById('userlogin2');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
