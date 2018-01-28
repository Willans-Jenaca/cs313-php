window.onload = resetBorders()

    function addbook(books) {
    
    // Test the number of books parameter against the regex. 
    // Ensure field has numerical values only.
    if (/(^[0-9]*$)/.test(books))
	{

    	// If user enters a value, add the number to a running book count.
    	var booksArray = [Number(document.getElementById('book1').value),
		      Number(document.getElementById('book2').value), 
		      Number(document.getElementById('book3').value),
		      Number(document.getElementById('book4').value),
		      Number(document.getElementById('book5').value),
		      Number(document.getElementById('book6').value),
		      Number(document.getElementById('book7').value),
		      Number(document.getElementById('book8').value)];
	}
	else
	{
	    resetBorders();
	}
    
    var totalbooks = 0;
    var runningTotal = 0;
    
    // Loop through arrays and add the values.
    for (i = 0; i<booksArray.length; i++)
	{
	    totalbooks += booksArray[i];
	}
    
    runningTotal = totalbooks * 5;
    
    
    // Write totals to hidden input field to pass to php
    document.getElementById("orderbooks").value = totalbooks;
    document.getElementById("orderDue").value = runningTotal.toFixed(2);
        
    // Write totals to html.
    document.getElementById('totalbooks').innerHTML = 'Total Books: ' + totalbooks;
    document.getElementById('totalDue').innerHTML = 'Total Due: $' + runningTotal.toFixed(2);
}

    function resetFirstName() {
	// on focus, reset field placeholder.
	document.getElementById('firstname').placeholder = 'First Name';
    }

function validateFirstName(firstName) {

    // Test the first name parameter against the regex. 
    // Ensure field is not blank and begins with a letter.
    if (/([a-zA-Z]*\s)*/.test(firstName))
	{
	    document.getElementById('firstname').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('firstname').value = '';
	    document.getElementById('firstname').placeholder = 'Invalid First Name';
	    document.getElementById('firstname').style.border = 'thin solid red';
	}
}

function resetLastName() {
    // on focus, reset field placeholder.
    document.getElementById('lastname').placeholder = 'Last Name';
}

function validateLastName(lastName) {

    // Test the last name parameter against the regex. 
    // Ensure field is not blank and begins with a letter.
    if (/([a-zA-Z]*\s)*/.test(lastName))
	{
	    document.getElementById('lastname').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('lastname').value = '';
	    document.getElementById('lastname').placeholder = 'Invalid Last Name';
	    document.getElementById('lastname').style.border = 'thin solid red';
	}
}

function resetPhone() {
    // on focus, reset field placeholder.
    document.getElementById('phonenumber').placeholder = '000-000-0000';
}

function validatePhone(thePhone) {

    // Test the phone number parameter against the regex. 
    // Will accept 10 digits alone or with common phone number formats.
    if (/^\s*((\d{10})|(\d{3}-\d{3}-\d{4})|(\(\d{3}\)\d{3}-\d{4})|(\(\d{3}\)\s\d{3}-\d{4}))(?!\S)/.test(thePhone))
	{
	    document.getElementById('phonenumber').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('phonenumber').value = '';
	    document.getElementById('phonenumber').placeholder = 'Invalid Phone Number';
	    document.getElementById('phonenumber').style.border = 'thin solid red';
	}
}

function resetStreet() {
    // on focus, reset field placeholder.
    document.getElementById('streetaddress').placeholder = '# First Street Address';
}

function validateStreet(theStreet) {

    // Test the street address parameter against the regex. 
    // Ensure field is not blank and begins with a digit.
    if (/\d*([a-zA-Z]*\s)*/.test(theStreet))
	{
	    document.getElementById('streetaddress').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('streetaddress').value = '';
	    document.getElementById('streetaddress').placeholder = 'Invalid Street Address';
	    document.getElementById('streetaddress').style.border = 'thin solid red';
	}
}

function resetCity() {
    // on focus, reset field placeholder.
    document.getElementById('city').placeholder = 'City Name';
}

function validateCity(theCity) {

    // Test the city parameter against the regex. 
    // Ensure field is not blank and begins with a letter.
    if (/([a-zA-Z]*\s)*/.test(theCity))
	{
	    document.getElementById('city').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('city').value = '';
	    document.getElementById('city').placeholder = 'Invalid City Name';
	    document.getElementById('city').style.border = 'thin solid red';
	}
}

function resetState() {
    // on focus, reset field placeholder.
    document.getElementById('state').placeholder = 'Capitalize State Abbrev.';
}

function validateState(theState) {

    // Test the state abbreviation parameter against the regex. 
    // ?!\S invalidates an extra letter. ^\s* allows only spaces at the beginning.
    if (/^\s*(A[LKSZR]|C[AOT]|D[EC]|F[LM]|G[AU]|HI|I[DLNA]|K[SY]|LA|M[EDHAINSOTP]|N[EVHJMYCD]|O[HKR]|P[WAR]|RI|S[CD]|T[NX]|UT|V[TAI]|W[AVIY])(?!\S)/.test(theState))
	{
	    document.getElementById('state').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('state').value = '';
	    document.getElementById('state').placeholder = 'Invalid State Abbrev.';
	    document.getElementById('state').style.border = 'thin solid red';
	}
}

function resetZip() {
    // on focus, reset field placeholder.
    document.getElementById('zip').placeholder = '00000';
}

function validateZip(theZip) {

    // Test the zip parameter against the regex. 
    // Allow 5 digits or full postal zip with 9 digits.
    if (/^\s*((\d{5})|(\d{5}-\d{4}))(?!\S)/.test(theZip))
	{
	    document.getElementById('zip').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('zip').value = '';
	    document.getElementById('zip').placeholder = 'Invalid Zip Code';
	    document.getElementById('zip').style.border = 'thin solid red';
	}
}

function resetCardNum() {
    // on focus, reset field placeholder.
    document.getElementById('creditcard').placeholder = '0000 0000 0000 0000';
}

function validateCardNum(theCardNum) {

    // Test the credit card number parameter against the regex. Allow 16 digits
    // straight or in groups of four with one space between groups.
    // ?!\S invalidates an extra digit. ^\s* allows only spaces at the beginning.
    if (/^\s*\d{16}(?!\S)|^(\s+)?\d{4}(\s)\d{4}(\s)\d{4}(\s)\d{4}(?!\S)/.test(theCardNum))
	{
	    document.getElementById('creditcard').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('creditcard').value = '';
	    document.getElementById('creditcard').placeholder = 'Invalid Card Number';
	    document.getElementById('creditcard').style.border = 'thin solid red';
	}
}

function resetExpDate() {
    // on focus, reset field placeholder.
    document.getElementById('expdate').placeholder = '00/00';
}

function validateExpDate(theExpDate) {

    // Test the date parameter against the regex. 
    // ?!\S invalidates an extra digit. ^\s* allows only spaces at the beginning.
    if (/^\s*([1-9]|0[1-9]|1[012])\/\d{2}(?!\S)/.test(theExpDate))
	{
	    document.getElementById('expdate').style.border = 'thin solid lightgrey';
	} 
    else
	{
	    document.getElementById('expdate').value = '';
	    document.getElementById('expdate').placeholder = 'Invalid Expiration Date';
	    document.getElementById('expdate').style.border = 'thin solid red';
	}
}

function resetBorders() {
    // on click of reset button, remove any red borders and reset placeholder.
    document.getElementById('firstname').style.border = 'thin solid lightgrey';
    document.getElementById('firstname').value = '';
    document.getElementById('firstname').placeholder = 'First Name';
    document.getElementById('lastname').style.border = 'thin solid lightgrey';
    document.getElementById('lastname').value = '';
    document.getElementById('lastname').placeholder = 'Last Name';
    document.getElementById('phonenumber').style.border = 'thin solid lightgrey';
    document.getElementById('phonenumber').value = '';
    document.getElementById('phonenumber').placeholder = 'Phone Number';
    document.getElementById('streetaddress').style.border = 'thin solid lightgrey';
    document.getElementById('streetaddress').value = '';
    document.getElementById('streetaddress').placeholder = 'Street Address';
    document.getElementById('city').style.border = 'thin solid lightgrey';
    document.getElementById('city').value = '';
    document.getElementById('city').placeholder = 'City';
    document.getElementById('state').style.border = 'thin solid lightgrey';
    document.getElementById('state').value = '';
    document.getElementById('state').placeholder = 'State Abbreviation';
    document.getElementById('zip').style.border = 'thin solid lightgrey';
    document.getElementById('zip').value = '';
    document.getElementById('zip').placeholder = 'Zip Code';
    document.getElementById('creditcard').style.border = 'thin solid lightgrey';
    document.getElementById('creditcard').value = '';
    document.getElementById('creditcard').placeholder = 'Credit Card Number';
    document.getElementById('expdate').style.border = 'thin solid lightgrey';
    document.getElementById('expdate').value = '';
    document.getElementById('expdate').placeholder = 'Expiration Date';
    document.getElementById('totalbooks').innerHTML = 'Total Books: 0';
    document.getElementById('totalDue').innerHTML = 'Total Due: $0.00';
}