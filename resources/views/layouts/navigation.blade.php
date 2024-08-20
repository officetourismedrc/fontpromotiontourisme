<div class="nav-menu">
    <div class="nav-close"><i class="ri-close-fill"></i></div>
    <div class="nav-menu__lists-block">
         <ul class="nav-menu__lists">
            <li class="nav-menu__list">
                <a href="{{url('/')}}" class="nav-menu__link">Home</a>
            </li>
            <li class="nav-menu__list">
                <a href="{{url('/#fpt')}}" class="nav-menu__link">Fpt</a>
            </li>
            <li class="nav-menu__list">
                <a href="{{route('document.pdf',['id'=>5])}}" class="nav-menu__link">Documents</a>
            </li>
            <li class="nav-menu__list">
                <a href="{{route('view.forum',['id'=>6])}}" class="nav-menu__link">Faq</a>
            </li>
            <li class="nav-menu__list">
                <a href="{{url('/#contact')}}" class="nav-menu__link">Contacts</a>
            </li>
         </ul>
         <ul class="nav-menu__search">
            <li class="nav-search__list">
                <a href="" class="nav-search__link"><i class="ri-search-line"></i></a>
            </li>
         </ul>
    </div>
</div>
<div class="nav-toggle">
    <i class="ri-menu-fill"></i>
</div>