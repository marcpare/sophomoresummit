function validate_email(field,alerttxt) {
	with (field) {
		apos=value.indexOf("@");
		dotpos=value.lastIndexOf(".");
		if (apos<1||dotpos-apos<2) {
			alert(alerttxt);
			return false;
		}
		else {
			return true;
		}
	}
}

function check_empty(field, alerttxt) {
	with (field) {
		if(value == null || value == ""){
			alert(alerttxt);
			return false;
		}else{
			return true;
		}
	}
}
		
function validate_form(thisform) {
	
	with (thisform){
		//check for empty fields
		var fieldsToCheck = [name, phone, major, activities, issue, bringto];		
		for(i = 0; i < fieldsToCheck.length; i++){
			var checkField = fieldsToCheck[i];
			if (check_empty(checkField, 'Looks like you forgot some information.')==false){
				checkField.focus();
				return false;
			}
		}
		
		//validate email address		
		if (validate_email(email,"Please enter a valid e-mail address.")==false){
			email.focus();
			return false;
		}
		
		//check for second-year students
		if (secondyear.checked == false){
			alert('We have to be able to verify your second-year status before the retreat.');
			secondyear.focus();
			return false;
		}
		
	}
}