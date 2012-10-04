/*
	Website:		Melanie Gardiner's portfolio website
	File:			contact.js
	Author:			Melanie Gardiner
	Created On:		2012-03-01
	Revised On:		2012-10-3
	Language: 		JavaScript
	
	Purpose:
		
	
	Related Files:
		index.php
		jquery.lightbox-0.5.js
		jquery.js
		contact.css
*/

var $ = function (id) {
	return document.getElementById(id);
} //End $

//on window load, call init
window.onload = init();

function init() {
// Form validation events------------------

// get the element which is named req_name, listen for a blur event, then call the function handler validateField
	$("req_name").onblur = validateField;
	$("email_").onblur = validateField;
	$("phone_").onblur = validateField;
	$("subject_").onblur = validateField;

	
	//print all input elements in an array; assign onblur events to elements with Input
	var inputs = document.getElementsByTagName("input");
	textboxes = new Array(); 
	
	$("contact_form").onsubmit = validateForm;
	
	//print just the types of text by walking the array, looking for type-text; therefore creating a new array//checking if ANYTHING is entered in the field
	for (var i = 0; i < inputs.length; i++) {
		if(inputs[i].type == "text") {
			textboxes.push(inputs[i]);
		}//end if
	}//end for
	
	for (var i = 0; i < textboxes.length; i++) {
		textboxes[i].onblur = validateField;
	}//end for
	
}//end init

//call this function upon hearing a blur event on the elements with the appropriate ids
//when this function is called, create 3 variables
//1-'this' - keyword; whatever called the function, rename it 'id'
//2-name a variable 'valid' and assign the boolean value of false to it
//3-look in the variable named 'id' for letters starting at address-0, keep looking until you find '_'; record the values from address 0 and before the '_' - put what you find in a variable called code

//if the value stored in 'code' matches 'req', then the length is greater than 0, thus returning True as the boolean value
//else if the value stored in 'code' matches 'email', call the testEmail function and send in the value from the field text box as the argument.
//if the return is 'valid' assign an empty string class\name. Thus removing the className that was assigned to it, if at all. In essense, clearing an error class
//else - if the return is not valid-true.. assign the className 'error' to the event handler that called it. 

function validateField() {
	var id = this.id;
	var valid = false;
	
	var code = id.substring(0, id.indexOf("_"));
	console.log(code);
	
	if (code == "req" || code == "subject") {
		valid = (this.value.length > 0);
	} // End if
	else if (code == "email") {
		valid = testEmail(this.value);
	} // End else if
	
	else if (code == "phone") {
		valid = testPhone(this.value);
	} // End else if
		
	if (valid) {
		this.className = "";
	} // End if
	else {
		this.className = "error";
	} // End else
	
} // End validateField

//create a function called testEmail
//the event that calls it sends in user content from the form and catches it as 'email'
//run a RegEx against it, and return a boolean value of true/false
function testEmail(email) {
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i;
	
	return emailRegEx.test(email);
}//end testEmail

// get the element which is named req_name, listen for a blur event, then call the function handler validateField

function testPhone(phone) {
	var phoneRegEx = /^\(?\d{3}\)?[\s-.]?\d{3}[\s-.]?\d{4}$/;
	
	return phoneRegEx.test(phone);
} // End testPhone

//checking valid on submit button to see if fields are filled out correctly
function validateForm() {
	//console.log(textboxes);
	
	//initialize boulean to true and let it tell us it's false
	var valid = true;
	
	for (var i = 0; i < textboxes.length; i++) {
		textboxes[i].focus();//give it the focus
		textboxes[i].blur();//change it to blur to initialize the onblur function
		
		if (textboxes[i].className == "error") {
			valid = false;
		}//end if
	}//end for
	
	return valid;
	
	
}//end validateForm