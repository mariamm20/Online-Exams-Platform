function myFunction(event) {
  var x = document.getElementById("eye");
  var y = document.querySelector('.view-password i')
  if (x.type === "password") {
    x.type = "text";
    y.style.color = '#1eaaf1'
  } else {
    x.type = "password";
    y.style.color = '#1c2750'
  }
}
// document.getElementById('role').innerHTML = `${sessionStorage.getItem('role')} Registration`;