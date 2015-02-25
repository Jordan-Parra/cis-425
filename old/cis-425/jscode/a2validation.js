function validate() {
	var warning = "Please fill in/fix/select \n";
	
	var x = document.forms["regForm"]["name"].value;
	if (x == null || x == "") {
		warning = warning + "\tName \n";
	}
	
	var x = document.forms["regForm"]["username"].value;
	if (x == null || x == "") {
		warning = warning + "\tUsername \n";
	}
	
	var x = document.forms["regForm"]["password"].value;
	if (x == null || x == "") {
		warning = warning + "\tPassword \n";
	}
	
	var x = document.forms["regForm"]["email"].value;
	if (x == null || x == "") {
		warning = warning + "\tEmail Address \n";
	}
	
	var x = document.forms["regForm"]["hot"].value;
	if (x == null || x == "") {
		warning = warning + "\tHot or Not? \n";
	}
	
	var x = document.forms["regForm"]["smart"].value;
	if (x == null || x == "") {
		warning = warning + "\tSmart or Not? \n";
	}
	
	var x = document.forms["regForm"]["beer"].value;
	if (x == null || x == "") {
		warning = warning + "\tFavorite Beer \n";
	}
	
	var x = document.forms["regForm"]["response"].value;
	if (x == null || x == "") {
		warning = warning + "\tWhy should I consider you? \n";
	}
	
	if (warning != "Please fill in/fix/select \n") {
		alert(warning);
		return false;
	} else {
		return true;
	}
	
}

// function validate() {
    // var x = document.forms["regForm"]["name"].value;
    // if (x == null || x == "") {
        // alert("First name must be filled out");
        // return false;
    // }
// }