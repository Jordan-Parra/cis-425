function giveFocus() {
	document.getElementById("user-id").focus();
}

function userid_message() {
	document.getElementById("messages").innerHTML = "User ID: 6 digits";
}

function uname_message() {
	document.getElementById("messages").innerHTML = "Username: 6-8 characters (lower-case letters and 0-9 only)";
}

function pword_message() {
	document.getElementById("messages").innerHTML = "Password: 5-8 characters (upper/lower-case letters and 0-9 only)";
}

function gators_message() {
	document.getElementById("messages").innerHTML = "Gators have teeth!";
}

function unicorns_message() {
	document.getElementById("messages").innerHTML = "Unicorns have horns!";
}

function peace_message() {
	document.getElementById("messages").innerHTML = "Good luck with that!";
}
