sideToggle = document.querySelector('.side-side__toggle');
sideContainer = document.querySelector('.side-side__container');
sideClose = document.querySelector('.side-side__close');

sideToggle.addEventListener('click', ()=>{
     sideContainer.classList.add('show-side-menu');
});

sideClose.addEventListener('click', ()=>{
    sideContainer.classList.remove('show-side-menu');
});

// side menu toggle remove name keep icon

sideMenuNameToggle = document.querySelector('.side-toggle');
sideMenuList = document.querySelectorAll('.side-menu__list');

sideMenuNameToggle.addEventListener('click', ()=>{
    sideMenuList.forEach(el => {
        el.classList.toggle('hide-name');
    });     
});

