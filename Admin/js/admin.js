let btn = document.querySelector('.navbar-toggler');
let ul = document.querySelector('.elements');
console.log(window.innerWidth)
window.onresize = function (){    
    if (screen.width < 700) {
        ul.classList.add('collapse')
    } else {
        ul.classList.remove('collapse');
        
    }
}


let modals = document.querySelectorAll('.modal');
let bodyy = document.querySelector('.table-content');

window.onclick = e => {
    if (e.target.tagName === 'I') {
        for (let modal of modals) {
            if (modal.classList.contains('show')) {
                bodyy.scrollLeft = 0;
                bodyy.style.scrollBehavior = "smooth";
                bodyy.classList.add('hide');
            }
        }

    }
    else {
        bodyy.classList.remove('hide');
    }
}
