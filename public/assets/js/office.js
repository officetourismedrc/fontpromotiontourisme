const navMenu =  document.querySelector('.nav-menu');
const navClose = document.querySelector('.nav-close');
const navToggle = document.querySelector('.nav-toggle')

navToggle.addEventListener('click', ()=>{
    console.log("click show menu");
    navMenu.classList.add('show-menu');
});

navClose.addEventListener('click', ()=>{
    navMenu.classList.remove('show-menu');
});
let changeColor = ()=>{
    if(window.scrollY >= 10){
        nav.classList.add('change-color');
     }
     else if(window.scrollY == 0){
        nav.classList.remove('change-color');
     }
}
const nav = document.querySelector('.nav');

window.addEventListener('scroll', changeColor);
window.addEventListener('load', changeColor);

//LANGUAGE send request  

const langSwitch = document.querySelector('#lang_switch');
const Http = new XMLHttpRequest();
let availableLocal ="";

langSwitch.addEventListener('change', ()=>{
    
    availableLocal =  langSwitch.value;
    Http.open("GET", 'language/'+availableLocal);
    Http.send();

    Http.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            location.reload();
      }
      }
   
})

// expand laws content

const expadable = document.querySelectorAll('.expand-content');
const lawsContainer = document.querySelectorAll('.laws-arrete__main');
const expandArrow = document.querySelectorAll('.expand-content i');

expadable.forEach(eltm => { eltm.addEventListener('click', ()=>{
    eltm.parentElement.classList.toggle('expand-container');

    const n = eltm.querySelector('i');
    
        n.classList.contains('ri-arrow-down-line')?
        n.classList.replace('ri-arrow-down-line', 'ri-arrow-up-line'):
        n.classList.replace('ri-arrow-up-line', 'ri-arrow-down-line');

    
});
});


/*====scrollreveal =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance:'60px',
    duration:2500,
    delay:400,
    reset:false //animation repeat
  });

  sr.reveal(`.hero-description,.definition-article, .data__main-block:nth-child(1),.data__main-block:nth-child(2)`,{origin:'left'});
  sr.reveal(`.hero-image,.definition-aside, .data__main-block:nth-child(3), .data__main-block:nth-child(4)`,{origin:'right'});
  sr.reveal(`.footer-mail__form, .laws-block:first-child, .laws-block:last-child`,{origin:'top'});

//   laws

// faq code

// code for extend

const forumButnExpd = document.querySelectorAll('.forum-question_button-expand');

forumButnExpd.forEach(n => {
    n.addEventListener('click', function (){
        const e = this.parentElement.parentElement.nextElementSibling;
        e.classList.toggle('expand-it');
    });
});

