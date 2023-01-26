function validateInput(input) {
    var id = input.id;
    var value = input.value;
    var errorElement = document.getElementById(id + "-error");
  
    if (id === "email") {
      if (!validateEmail(value)) {
        errorElement.innerHTML = "Invalid email address.";
        input.classList.add("is-invalid");
      } else {
        errorElement.innerHTML = "";
        input.classList.remove("is-invalid");
      }
    } else if (id === "password") {
      if (value.length >= 17) {
        errorElement.innerHTML = "Password should be less than 17 characters.";
        input.classList.add("is-invalid");
      }else {
        errorElement.innerHTML = "";
        input.classList.remove("is-invalid");
      }
    }
  }
  
  function validateForm() {
    var inputs = document.getElementsByTagName("input");
    var isValid = true;
    for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].classList.contains("is-invalid")) {
        isValid = false;
        break;
      }
    }
    if (!isValid) {
      alert("Please correct the errors before submitting the form.");
    }
    return isValid;
  }
  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }
  