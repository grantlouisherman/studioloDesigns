/*
Email.send("from@you.com",
"to@them.com",
"This is a subject",
"this is the body",
"smtp.yourisp.com",
"username",
"password");

*/

document.getElementById("emailButton").onclick(function(){
	Email.send(document.getElementById("InputEmail").text(),
				"grantlouisherman041@gmail.com")
})