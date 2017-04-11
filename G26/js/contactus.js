function $(id) {
	var element = document.getElementById(id);
	if (element === null)
		alert('Programmer error: ' + id + ' does not exist.');
	return element;
}

function testFirstNameValid(id) {
    var firstName = $(id).value;
    
    return (firstName.length > 0);
}


/*
function warnFirstNameInvalid(id) {
    if(!testFirstNameValid(id))
        $('invalidfirstname').innerHTML="Please provide your first name";
}

function testLastNameValid(id) {
    var lastName = $(id).value;
    
    return (lastName.length > 0);
}

function warnLastNameInvalid(id) {
    if(!testLastNameValid(id))
        $('invalidlastname').innerHTML="Please provide your last name";
}
*/

function testNameValid_2(id) {
	var name = $(id).value;
	var nameregex = /^[a-zA-Z]+$/;
	
	return nameregex.test(name);
}

function testDomainValid(id) {
    var re = /\S+@\S+\.\S+/;	
	return re.test($(id).value);
}

/*
function warnDomainInvalid(id) {
    if(!testDomainValid(id))
	{
        $('invalidemail').innerHTML="Please provide a valid email domain type ('.com', '.ca', '.org')";
        $(id).value = "";
	}
}
*/

function formValidate() {
	var valid = true;
	
	if(!testNameValid_2('firstname') || !testNameValid_2('lastname')) {
		valid = false;
		$('fullNameWrapper').className = 'error';
		$('fullNameError').innerHTML = 'Name fields cannot be blank and cannot contain numbers or special characters';
	} else {
		$('fullNameWrapper').className = '';
		$('fullNameError').innerHTML = '';
	}
	
	if(!testDomainValid('email')) {
		valid = false;
		$('emailWrapper').className = 'error';
		$('emailError').innerHTML = 'Please provide a valid email address';
	} else {
		$('emailWrapper').className = '';
		$('emailError').innerHTML = '';
	}
	
	if( !valid )
		alert('Please edit your information');
	return valid;
}