function checkForm(form) {
	// Array to hold error messages that will be displayed to user
	var errors = [];
	
	// Floating focus
	var f1 = 0;
    var f2 = 0;
    var f3 = 0;
    var f4 = 0;
    var f5 = 0;
    var f6 = 0;
    var f7 = 0;
    var f8 = 0;
    var f9 = 0;
    var f10 = 0;
	
	//
	
	if (!checkLength(form.name, 4, 30)) {
		f1 = 1;
		errors.push("You must enter a name between 4 - 30 characters");
	}
	
	if (!checkLength(form.username, 4, 15)) {
		f2 = 1;
		errors.push("You must enter a username between 4 - 15 characters");
	}
	
	if (!checkLength(form.password, 4, 15)) {
		f3 = 1;
		errors.push("You must enter a password between 4 - 15 characters");
	}

	if (form.password.value.indexOf(" ") != -1) {
		f3 = 1;
		errors.push("Your password must not contain any spaces");
		form.password.value = "";
		form.password.style.backgroundColor = "#FFC59F";
	} 
	
	if (form.re_password.value != form.password.value) {
		f4 = 1;
		errors.push("Passwords must match");
		form.password.value = "";
		form.re_password.value = "";
		form.password.style.backgroundColor = "#FFC59F";
		form.re_password.style.backgroundColor = "#FFC59F";
	}
	
	if (!checkLength(form.email, 6, 50)) {
		f5 = 1;
		errors.push("You must enter an email address between 6 - 50 characters");
	}
	
	if (form.email.value.indexOf("@") == -1 || form.email.value.indexOf(".") == -1) {
		f5 = 1;
		errors.push("You must enter a valid email address (e.g. example@email.com)");
		form.email.value = "";
		form.email.style.backgroundColor = "#FFC59F";
	}
	
	if (!checkLength(form.response, 2, 500)) {
		f10 = 1;
		errors.push("You must give a reason for consideration");
	}
	
	//
	if (errors.length > 0) {
        //
		reportErrors(errors);
		
		//
		if (f10 == 1) { 
			form.response.focus(); 
		}
		if (f9 == 1) { 
			form.beer.focus(); 
		}
		if (f8 == 1) { 
			form.smart.focus(); 
		}
		if (f7 == 1) { 
			form.hot.focus(); 
		}
		if (f6 == 1) { 
			form.probation.focus(); 
		}
		if (f5 == 1) { 
			form.email.focus(); 
		}
		if (f4 == 1) { 
			form.re_password.focus(); 
		}
		if (f3 == 1) { 
			form.password.focus(); 
		}
		if (f2 == 1) { 
			form.username.focus(); 
		}
		if (f1 == 1) { 
			form.name.focus(); 
		}
		
		//
        return false;
    }
	
	// Passed Validation
    return true;
}

function checkLength(field, min, max) {
	//
	if (field.value == "") {
		field.style.backgroundColor = "#FFEB9F";
		return false;
	} else if (field.value.length < min || field.value.length > max) {
		field.style.backgroundColor = "#FFC59F";
		field.value = "";
		return false;
	} 
	
	field.style.backgroundColor = "#FFFFFF";
	return true;
}

function checkPassword() {
	
}

function reportErrors(errors){
    var message = "There were some problems...\n";
    var numError;
    for (var i = 0; i < errors.length; i++) {
        numError = i + 1;
        message += "\n" + numError + ". " + errors[i];
    }
    alert(message);
}