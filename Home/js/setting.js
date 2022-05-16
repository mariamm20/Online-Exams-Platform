
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

var output = document.getElementById("images");
let showoneimg = function () {

    var input = document.getElementById("img");
    if(output.style.display == "none"){
        output.style.display == "block"
    }
    
    output.style.display = "block";
    if (output.innerHTML == "") {
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    } else {
        output.innerHTML = "";
        for (let i = 0; i < 1; i++) {
            output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
        }
    }

}
var btn1 = document.querySelector(".change-list .btn1");
btn1.addEventListener("click", function(){
output.innerHTML="";
output.style.display="none";
})
var btn2 = document.querySelector(".change-list .btn2");
btn2.addEventListener("click", function () {
    output.innerHTML = "";
    output.style.display = "none";
})


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










