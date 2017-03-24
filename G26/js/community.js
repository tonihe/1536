function $(id) {
	var element = document.getElementById(id);
	if (element == null)
		alert('Programmer error: ' + id + ' does not exist.');
	return element;
}

function testFirstNameValid(id) {
    var firstName = $(id).value;
    
    return (firstName.length > 0);
}

function warnFirstNameInvalid(id) {
    if(!testFirstNameValid(id))
        $('invalidfirstname').innerHTML="Please provide your first name<br>";
}

function testLastNameValid(id) {
    var lastName = $(id).value;
    
    return (lastName.length > 0);
}

function warnLastNameInvalid(id) {
    if(!testLastNameValid(id))
        $('invalidlastname').innerHTML="Please provide your last name<br>";
}

function testDomainValid(id) {	
	var re = /\S+@\S+\.\S+/;	
	return re.test($(id).value);
}

function warnDomainInvalid(id) {
    if(!testDomainValid(id))
	{
        $('invalidemail').innerHTML="Please provide a valid email<br>";
		$(id).value = "";
	}
}

function testUserNameValid(id) {
    var userName = $(id).value;
    
    return (userName.length > 0);
}

function warnUserNameInvalid(id) {
    if(!testUserNameValid(id))
        $('invalidusername').innerHTML="Please provide a user name<br>";
}

function testPasswordValid(id) {
    var userPassword = $(id).value;
    
    return (userPassword.length > 0);
}

function warnPasswordInvalid(id) {
    if(!testPasswordValid(id))
        $('invalidpassword').innerHTML="Please provide a password<br>";
}

function testConfirmPasswordValid(id, acceptBlank) {
	var valid = false;
    var userpassword = $(id+'_0').value;
	var userpasswordconf = $(id+'_1').value;
	if(acceptBlank && userpasswordconf.length==0)
		valid = true;
 
    if (userpassword == userpasswordconf)
		valid = true;
		
	return valid;
}

function warnConfirmPasswordInvalid(id, acceptBlank) {
    if(!testConfirmPasswordValid(id, acceptBlank))
        $('invalidconfpassword').innerHTML="Your password must match the one above<br>";
}