const message = "Merci pour votre message, Mr STARK vous recontactera peut-être..."

document.getElementById("contactform").addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
});