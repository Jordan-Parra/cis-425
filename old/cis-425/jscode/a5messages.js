function name_message() {
	document.getElementById("messages").innerHTML = "<p>Name: 4-30 chars, upper/lower case letters and - or ' only</p>";
}

function username_message() {
	document.getElementById("messages").innerHTML = "<p>Between 4-15 chars using alphanumeric chars and/or special chars (i.e. -, _, !, $) only</p>";
}

function password_message() {
	document.getElementById("messages").innerHTML = "Between 5-15 chars using alphanumeric chars and/or special chars (i.e. -, _, !, $) only";
}

function confirm_password_message() {
	document.getElementById("messages").innerHTML = "Passwords must match";
}

function email_message() {
	document.getElementById("messages").innerHTML = "Valid email address only";
}

function probation_message() {
	document.getElementById("messages").innerHTML = "Nuh uh";
}

function hot_yes_message() {
	document.getElementById("messages").innerHTML = "Yeaaa";
}

function hot_no_message() {
	document.getElementById("messages").innerHTML = "Ehhh";
}

function smart_yes_message() {
	document.getElementById("messages").innerHTML = "Good";
}

function smart_no_message() {
	document.getElementById("messages").innerHTML = "Not good";
}

function beer_message() {
	document.getElementById("messages").innerHTML = "No crappy light beers allowed";
}

function response_message() {
	document.getElementById("messages").innerHTML = "Because at the moment, I'm not";
}

function comments_message() {
	document.getElementById("messages").innerHTML = "We appreciate your feedback!"
}