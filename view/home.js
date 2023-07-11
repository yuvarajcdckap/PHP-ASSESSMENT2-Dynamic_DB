let form = document.querySelector(".dbName")

function validateForm() {
    if (form.value == "") {
      alert("Name must be filled out");
      return false;
    }
  }