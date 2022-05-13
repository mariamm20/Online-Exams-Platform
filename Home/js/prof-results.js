function show(){
    let x = document.querySelector(".img-right")
    let y = document.querySelector(".chapters")
    let z = document.querySelector(".names-chapters")

    x.classList.add("d-none")
    y.classList.add("magictime","swashIn")
    y.classList.remove("d-none")
    z.classList.add("magictime","swashIn")
    z.classList.remove("d-none")
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})