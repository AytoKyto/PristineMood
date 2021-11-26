var burger = document.querySelector('#open');
var nav = document.querySelector('.wrapperNav');
var cross = document.getElementById('close');
let menuVisible = false;

function menu() {
    menuVisible = !menuVisible;
    if (menuVisible == true) {
        burger.style.display = 'none';
        cross.style.display = 'block';
        nav.style.display = 'flex';
    } else if (menuVisible == false) {
        burger.style.display = 'block';
        cross.style.display = 'none';
        nav.style.display = 'none';
    } else {
        console.log('error');
    }
}
