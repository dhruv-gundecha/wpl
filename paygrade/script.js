x=0;
function validateNumber() {
  var number = $('#phone').val()
  if (/^\d{10}$/.test(number)) {
    return true;
  }
  else {
    alert("please enter a valid number");
    return false;
    x = x + 1;
  }
}
function validateID() {
  var number = $('#emp_id').val()
  if (/^\d*$/.test(number)) {
    return true;
  }
  else {
    alert("please enter a valid id");
    return false;
    x = x + 1;
  }
}
function validateInput() {
  var input = $('#emp_city').val()
  console.log(input)
  if (!input) {
    // Check if input is empty
    alert("Employee city cannot be empty.");
    return false;
    x = x + 1;
  }

  if (!/^[a-zA-Z]+$/.test(input)) {
    // Check if input contains only letters
    alert("Employee city must consist of only letters.");
    return false;
    x = x + 1;
  }

  return true;
}
function validateName() {
  var input = $('#emp_name').val()
  console.log(input)
  if (!input) {
    // Check if input is empty
    alert("Employee name cannot be empty.");
    return false;
    x = x + 1;
  }

  if (!/^[a-zA-Z]+$/.test(input)) {
    // Check if input contains only letters
    alert("Employee name must consist of only letters.");
    return false;
    x = x + 1;
  }
  return true;
}
function check(){
  if (x == 0) {
    alert("The form has been submmitted");
  }
  return true;
}