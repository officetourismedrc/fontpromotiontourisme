let mainNavToggle = document.querySelector('.main-nav__toggle'),
    navBlocks = document.querySelector('.nav_blocks'),
    mainNavClose = document.querySelector('.main-nav-close');

    mainNavToggle.addEventListener('click', ()=>{
          navBlocks.classList.add('show-main-menu');
    });
    mainNavClose.addEventListener('click', ()=>{
        navBlocks.classList.remove('show-main-menu');
    });


