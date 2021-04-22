//**********navbar**********
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

//**********parallax**********
const parallax = document.getElementById('parallax');
const parallax2 = document.getElementById('parallax2');

document.addEventListener('scroll',()=>{
    let value = window.scrollY;

    parallax.style.right = value * 0.5 + 'px';
    parallax2.style.left = value * 1.3 + 'px';
});

//**********animation portfolio**********
const boxPortfolio = document.getElementById('boxPortfolio');
const boxProjet = document.getElementById('boxProjet');

document.addEventListener('scroll',()=>{
    let value = window.scrollY;

    if(value >= 300){
        boxPortfolio.style.opacity = '1';
        boxPortfolio.style.transform = 'translateX(0px)';
        boxPortfolio.style.transition = '1.25s ease-in-out';
    }
    else{
        boxPortfolio.style.opacity = '0';
        boxPortfolio.style.transform = 'translateX(-50px)';
    }
    if(value >= 850){
        boxProjet.style.opacity = '1';
        boxProjet.style.transform = 'translateX(0px)';
        boxProjet.style.transition = '1.25s ease-in-out';
    }
    else{
        boxProjet.style.opacity = '0';
        boxProjet.style.transform = 'translateX(50px)';
    }
});

//**********animation prestations**********
const contentPrestation = document.querySelector('.contentPrestation');

document.addEventListener('scroll', () =>{
    let value = window.scrollY;

    if(value >= 100){
        contentPrestation.style.opacity = '1';
        contentPrestation.style.transform = 'translateY(0px)';
        contentPrestation.style.transition = '1.25s ease-in-out';
    }
    else{
        contentPrestation.style.opacity = '0';
        contentPrestation.style.transform = 'translateY(50px)';
    }
});

//**********animation lettre**********
const txtAnim = document.querySelector('.textAnim');

txtAnim.style.opacity = '1'
new Typewriter(txtAnim, {
})
    .changeDelay(75)
    .typeString('Vous avez un projet ou une idée en tête ?')
    .pauseFor(300)
    .typeString(' Demander un devis,')
    .pauseFor(300)
    .typeString('<strong style = "color: # FE4A49;"> c\'est gratuit !</strong>')
    .start();

//**********animation contact prestation**********
const linkContact = document.getElementById('linkContact');

document = addEventListener('scroll', () =>{
    let value = window.scrollY;

    if(value >= 900){
        linkContact.style.transform = 'scale(1)';
        linkContact.style.transition = '1.5s ease';
    }else{
        linkContact.style.transform = 'scale(0.25)';
    }
})