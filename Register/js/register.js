function myFunction(event) {
  var x = document.getElementById("eye");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
// document.getElementById('role').innerHTML = `${sessionStorage.getItem('role')} Registration`;