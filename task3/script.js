console.log("connected");

var wrongCount = 0;

function getEmail() {
  const email = document.getElementById("email").value;
  if (email.indexOf("@") === -1) {
    document.getElementById("emailErr").innerHTML = "Email must contain @";
    return false;
  } else {
    document.getElementById("emailErr").innerHTML = "";
    return true;
  }
}

function getPassword() {
  const password = document.getElementById("password").value;
  let msg = "";
  if (password.length < 6) {
    msg = "Password must be at least 6 characters";
  }
  if (password.indexOf("#") === -1) {
    if (msg) msg += ". ";
    msg += "Password must contain #";
  }
  document.getElementById("pwdErr").innerHTML = msg;
  return msg === "";
}

function collectFormData() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  console.log("Printing given values...");
  console.log(email);
  console.log(password);

  document.getElementById("emailErr").innerHTML = "";
  document.getElementById("pwdErr").innerHTML = "";

  let hasError = false;

  if (!email) {
    document.getElementById("emailErr").innerHTML = "Email is required";
    hasError = true;
  } else if (email.indexOf("@") === -1) {
    document.getElementById("emailErr").innerHTML = "Email must contain @";
    hasError = true;
  }

  let msg = "";
  if (password.length < 6) {
    msg = "Password must be at least 6 characters";
  }
  if (password.indexOf("#") === -1) {
    if (msg) msg += ". ";
    msg += "Password must contain #";
  }
  if (msg) {
    document.getElementById("pwdErr").innerHTML = msg;
    hasError = true;
  }

  if (hasError) {
    wrongCount++;
    document.getElementById("invalidCount").style.display = "block";
    document.getElementById("count").innerHTML = wrongCount;
    return false;
  }

  alert("Success! Form is valid.");
  return true;
}
