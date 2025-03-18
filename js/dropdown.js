let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.sub-menu'), //ul li a
buttonclick = document.querySelector('.check-button'), //button
hamburger = document.querySelector(',menu-icon');

buttonclick.addEventListener('click', ()=>{
    dropdown.classList.toggle('shop-dropdown');
    if(submenu){
        submenu.classList.toggle('shop-dropdown');
    }
    hamburger.classList.toggle('animate-button');
})