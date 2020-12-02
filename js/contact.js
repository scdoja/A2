var firstName = document.querySelectorAll("#fName")[0];
var lastName = document.querySelectorAll("#lName")[0];
var emailAddress = document.querySelectorAll("#emailAddress")[0];
var roles = document.querySelectorAll("#roles")[0];
var form = document.querySelectorAll("#form")[0];
var message = document.querySelectorAll("#message")[0];
var category1 = document.querySelectorAll("#ind")[0];
var category2 = document.querySelectorAll("#tech")[0];
var category3 = document.querySelectorAll("#car")[0];
var button = document.querySelectorAll("#submit")[0];

button.addEventListener("click", insertdata, false);
function insertdata(event) {
	event.preventDefault();
    //console.log(fName.value);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(e){
        console.log(xhr.readyState);
        if(xhr.readyState === 4){
            console.log("CHECK YOUR DATABASE TABLE!");
            //DOM Manipulation
            form.remove()
            button.removeEventListener("click", insertdata, false);
            message.innerHTML = "Thank you for contacting us, we will get back to you!";
           }
    };
    xhr.open("POST","process-contact-page.php",true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send(`firstName=${firstName.value}&lastName=${lastName.value}&emailAddress=${emailAddress.value}&roles=${roles.value}&category1=${category1.value}&category2=${category2.value}&category3=${category3.value}`);
}
