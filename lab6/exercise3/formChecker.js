function validateForm() {
  let email = document.forms["store"]["email"].value;
  if (email == "") {
    text = "Email must be in email format";
    return false;
  }

  let password = document.forms["store"]["pass"].value;
  if (password == "") {
    text = "Must enter a password";
  }

  let item1 = document.forms["store"]["item-1"].value;
  if (item1 == "") {
    text = "Must enter a quantity for Desk";
  }

  let item2 = document.forms["store"]["item-2"].value;
  if (item2 == "") {
    text = "Must enter a quantity for Chair";
  }

  let item3 = document.forms["store"]["item-3"].value;
  if (item3 == "") {
    text = "Must enter a quantity for Bookshelf";;
  }

  let shipping = document.forms["store"]["shipping-choice"].value;
  if (shipping == "") {
    text = "Must select a shipping option";
  }

  document.getElementById("alert").innerHTML = text;
}