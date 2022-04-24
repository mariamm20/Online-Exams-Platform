let ul = document.querySelector('.elements');
if (screen.width <= 700) {
    document.onload(ul.classList.add('collapse'));
}

let modals = document.querySelectorAll('.modal');
let bodyy = document.querySelector('.table-content');

window.onclick = e => {
    if (e.target.tagName === 'I') {
        for (let modal of modals) {
            if (modal.classList.contains('show')) {
                bodyy.scrollLeft=0;
                bodyy.style.scrollBehavior = "smooth";
                bodyy.classList.add('hide');
            } 
        }

    }
else{
    bodyy.classList.remove('hide');
}
}
