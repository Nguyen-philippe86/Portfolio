// navbar 
const mainMenu = document.querySelector('.mainMenu');
const openMenu = document.querySelector('.openMenu');
const closeMenu = document.querySelector('.closeMenu');

openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

function show() {
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
function close() {
    mainMenu.style.top = '-100%';
}

//parallax
const parallax = document.getElementById('parallax');
const parallax2 = document.getElementById('parallax2');

document.addEventListener('scroll',()=>{
    let value = window.scrollY;

    parallax.style.right = value * 0.5 + 'px';
    parallax2.style.left = value * 1.3 + 'px';
});

//
window.onload = function() {
    const boxPortfolio = document.getElementById('boxPortfolio');
    window.addEventListener('scroll', scrollBoxPortfolio);
    function scrollBoxPortfolio() {
        if(window.scrollY >= 300 ){
            boxPortfolio.style.opacity = '1';
            boxPortfolio.style.transition = '1.5s ease-in-out';
        }
        else{
            boxPortfolio.style.opacity = '0';
        }
    }
}



//parallax portfolio
// const boxPortfolio = document.getElementById('boxPortfolio');

// window.addEventListener('onload', ()=>{

//     boxPortfolio.style = window. * 2 + 'px';
// });
