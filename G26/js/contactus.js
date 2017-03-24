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

function testDomainValid(id) {
    var domain = ($(id).value.toUpperCase());
    var domain3 = domain.substring(domain.length-3);
    var domain4 = domain.substring(domain.length-4);
    
    return (domain3 == '.CA' || domain4 == '.COM' || domain4 == '.ORG');
}

function warnDomainInvalid(id) {
    if(!testDomainValid(id))
	{
        $('invalidemail').innerHTML="Please provide a valid email domain type ('.com', '.ca', '.org')";
        $(id).value = "";
	}
}