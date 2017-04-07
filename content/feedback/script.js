form.name.value = "";
form.theme.value = "";
form.message.value = "";
form.email.value = "";
document.getElementById("sentSuccess").style.display = "none";
document.getElementById("sentError").style.display = "none";
var emailPattern = /[-_a-z0-9]+@[a-z0-9]+\.[a-z]{2,6}/i;

function getCountSymbols(value) {
   var count, clear = "";
   var length = value.length;
   if (length > 0) {
      count = "Количество символов: " + length + " (255)";
      clear = "Очистить поле";
   } else {
      count = clear = "";
   }
   document.getElementById("countSymbols").innerHTML = count;
   document.getElementById("clearSymbols").innerHTML = clear;
}
function checkForm(form) {
   var name = form.name.value;
   var theme = form.theme.value;
   var message = form.message.value;
   var email = form.email.value;
   var isError = false;

   if (name.length < 2) {
      form.name.className += " error";
      isError = true;
   } else {form.name.className = "";}
   if (theme.length < 3) {
      form.theme.className += " error";
      isError = true;
   } else {form.theme.className = "";}
   if (message.length < 5) {
      form.message.className += " error";
      isError = true;
   } else {form.message.className = "";}
   if (!window.emailPattern.test(email)) {
      form.email.className += " error";
      isError = true;
   } else {form.email.className = "";}

   if (isError) {
      document.getElementById("sentError").style.display = "block";
      document.getElementById("sentSuccess").style.display = "none";
   } else {
      form.name.value = "";
      form.theme.value = "";
      form.message.value = "";
      form.email.value = "";
      document.getElementById("title").style.display = "none";
      document.getElementById("feedbackForm").style.display = "none";
      document.getElementById("sentError").style.display = "none";
      document.getElementById("sentSuccess").style.display = "block";
   }
}

function correctCount(input, validLength) {
   if (input.value.length >= validLength) {
      input.className = "";
   }
}

function correctEmail(input) {
   if (emailPattern.test(input.value)) {
      input.className = "";
   }
}

function clearMessage() {
   form.message.value = "";
   getCountSymbols(0);
}
