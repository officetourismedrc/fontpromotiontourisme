<header class="header">
    <div class="header-container container">
       <nav class="nav">
          <div class="nav-top">
              <div class="nav-top__left"><i class="ri-phone-fill"></i><span>+</span><span>243 000 000 000</span></div>
              <div class="nav-top__right">
                <div>
                  <i class="ri-twitter-x-fill"></i>
                  <i class="ri-facebook-fill"></i>
                  <i class="ri-instagram-fill"></i>
                  <i class="ri-linkedin-fill"></i>
                </div>
                <div>
                   @include('layouts.languages.language')
                </div>
              </div>
          </div>
          <div class="nav-bottom">
            <a href="{{url('/')}}">
                <div class="nav-logo">
                    <img src="{{url('assets/images/logo.png')}}" alt="logo">
                </div>
            </a>
              <div class="nav-menu">
                <div class="nav-close"><i class="ri-close-fill"></i></div>
                <div class="nav-menu__lists-block">
                     <ul class="nav-menu__lists">
                        <li class="nav-menu__list">
                            <a href="{{url('/')}}" class="nav-menu__link">{{__('Accueil')}}</a>
                        </li>
                        <li class="nav-menu__list">
                            <a href="{{url('/#fpt')}}" class="nav-menu__link">Fpt</a>
                        </li>
                        <li class="nav-menu__list">
                            <a href="{{route('document.pdf',['id'=>5])}}" class="nav-menu__link">{{__('Documents')}}</a>
                        </li>
                        <li class="nav-menu__list">
                            <a href="{{route('view.forum',['id'=>6])}}" class="nav-menu__link">Faq</a>
                        </li>
                        <li class="nav-menu__list">
                            <a href="#contact" class="nav-menu__link">{{__('Contact')}}</a>
                        </li>
                     </ul>
                     <ul class="nav-menu__search">
                        <li class="nav-search__list">
                            <a href="" class="nav-search__link nav-menu__link"><i class="ri-search-line"></i></a>
                        </li>
                     </ul>
                </div>
            </div>
            <div class="nav-toggle">
                <i class="ri-menu-fill"></i>
            </div>
          </div>

       </nav>
       <div class="hero">
          <div class="hero-left">
             <div class="hero-left__desc">
                <span class="hero-left__text-1">{{__("Le fpt c'est nous")}}</span>
                <div class="hero-left__autre-platform">
                   <span class="hero-left__text-2">{{__('Visitez nos autres plateformes')}}</span>
                   <div class="hero-left__platforms">
                      <span class="hero-left__platform-1">{{__('Ont site institutionel')}}</span>
                      <span class="hero-left__platform-1">{{__('Ont produit touristique')}}</span>
                   </div>
                </div>
             </div>
          </div>
          <div class="hero-right">
              <div class="hero-right__image">
                  
                  <img src="{{url('assets/images/woman_c.png')}}" alt="" class="hero-right__img">
                 
              </div>
          </div>
       </div>
    </div>
    <div class="header-deco__left">
      <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 841.89 595.28"><defs>
          <style>.cls-1{fill:#391a00;}.cls-2{fill:#ef8e01;}.cls-3{fill:#009e96;}</style>
        </defs>
        <title>PRESENTATION</title>
        <rect class="cls-1" x="404.27" y="108.95" width="73.12" height="73.12" transform="translate(232.01 -269.09) rotate(45)"/><path class="cls-2" d="M440.49,53.45l-92.4,92.4,92.4,92.4,92.4-92.4Zm-.06,167-74.69-74.69,74.69-74.68,74.69,74.68Z"/>
        <rect class="cls-2" x="258.13" y="295.41" width="57.09" height="57.09" transform="translate(-145.1 297.6) rotate(-45)"/><path class="cls-3" d="M286.68,251.72l-72.15,72.14L286.68,396l72.14-72.15Zm-.05,130.41-58.31-58.31,58.31-58.32L345,323.82Z"/>
        <rect class="cls-2" x="569.95" y="295.22" width="57.38" height="57.38" transform="translate(-53.7 518.17) rotate(-45)"/><path class="cls-3" d="M598.64,251.4l-72.51,72.51,72.51,72.51,72.51-72.51Zm0,131.07L540,323.86l58.61-58.61,58.61,58.61Z"/>
        <rect class="cls-2" x="415.67" y="403.35" width="48.3" height="48.3" transform="translate(431.1 -185.79) rotate(45)"/><polygon class="cls-1" points="448.93 303.91 440.49 295.47 376.52 231.51 348 202.99 319.42 174.41 290.9 202.93 319.48 231.51 391.88 303.91 411.97 324 411.91 324.06 420.34 332.49 440.43 352.58 512.89 425.04 484.37 453.56 440.49 497.44 368.03 424.98 411.91 381.1 391.82 361.01 383.38 352.58 326.75 409.21 310.98 424.98 440.49 554.48 541.47 453.5 541.49 453.52 570.01 425 448.93 303.91"/>
        <polygon class="cls-1" points="561.5 174.44 532.92 203.03 469.08 266.86 497.61 295.38 561.44 231.55 590.02 202.97 561.5 174.44"/>
        </svg>
    </div>
    <div class="header-deco__right">
      <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 841.89 595.28"><defs>
          <style>.cls-1{fill:#391a00;}.cls-2{fill:#ef8e01;}.cls-3{fill:#009e96;}</style>
        </defs>
        <title>PRESENTATION</title>
        <rect class="cls-1" x="404.27" y="108.95" width="73.12" height="73.12" transform="translate(232.01 -269.09) rotate(45)"/><path class="cls-2" d="M440.49,53.45l-92.4,92.4,92.4,92.4,92.4-92.4Zm-.06,167-74.69-74.69,74.69-74.68,74.69,74.68Z"/>
        <rect class="cls-2" x="258.13" y="295.41" width="57.09" height="57.09" transform="translate(-145.1 297.6) rotate(-45)"/><path class="cls-3" d="M286.68,251.72l-72.15,72.14L286.68,396l72.14-72.15Zm-.05,130.41-58.31-58.31,58.31-58.32L345,323.82Z"/>
        <rect class="cls-2" x="569.95" y="295.22" width="57.38" height="57.38" transform="translate(-53.7 518.17) rotate(-45)"/><path class="cls-3" d="M598.64,251.4l-72.51,72.51,72.51,72.51,72.51-72.51Zm0,131.07L540,323.86l58.61-58.61,58.61,58.61Z"/>
        <rect class="cls-2" x="415.67" y="403.35" width="48.3" height="48.3" transform="translate(431.1 -185.79) rotate(45)"/><polygon class="cls-1" points="448.93 303.91 440.49 295.47 376.52 231.51 348 202.99 319.42 174.41 290.9 202.93 319.48 231.51 391.88 303.91 411.97 324 411.91 324.06 420.34 332.49 440.43 352.58 512.89 425.04 484.37 453.56 440.49 497.44 368.03 424.98 411.91 381.1 391.82 361.01 383.38 352.58 326.75 409.21 310.98 424.98 440.49 554.48 541.47 453.5 541.49 453.52 570.01 425 448.93 303.91"/>
        <polygon class="cls-1" points="561.5 174.44 532.92 203.03 469.08 266.86 497.61 295.38 561.44 231.55 590.02 202.97 561.5 174.44"/>
        </svg>
    </div>
    <div class="fpt__fpt">
        <span>{{__('Payer le fpt')}}</span>
    </div>
  </header>