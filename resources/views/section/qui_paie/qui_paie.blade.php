@extends('layouts.app')
@section('content')
    
<section class="section section_data qui_paie">
       
    <div class="data_container container">
        <div class="data__content">
          <div class="data__main-block">
               
            <article class="data__article">
              <h1 class="section__title">Qui paie le FPT</h1>
              
              <p class="data__desc">
                <p>Ce sont les consommateurs et voyageurs congolais et étrangers.</p>
                <p>Les opérateurs du secteur collectent et reversent dans un compte ouvert par l'Office National du Tourisme.(Cfr Arrêté 0013.CAB/MIN/TOURISME/FMMA/2018 du 17 Août 2018).</p>
                <div class="data__desc-list__block">
                <ul class="data__desc-lists">
                  <li class="data__desc-list">Des guest-houses;</li>
                  <li class="data__desc-list">Des compagnies aériennes;</li>
                  <li class="data__desc-list">Des agences des voyages;</li>
                  <li class="data__desc-list">Des transporteurs lacustres;</li>
                  <li class="data__desc-list">Des transporteurs fluviaux;</li>
                  <li class="data__desc-list">Des transporteurs maritimes;</li>
                  <li class="data__desc-list">Des transporteurs Terrestres;</li>
                </ul>
                <ul class="data__desc-lists">
                  <li class="data__desc-list">Des restaurants;</li>
                  <li class="data__desc-list">Des flats;</li>
                  <li class="data__desc-list">Des hôtels;</li>
                  <li class="data__desc-list">Des Motels;</li>
                  <li class="data__desc-list">Des lodges;</li>
                  <li class="data__desc-list">Des ouberges;</li>
                </ul>
              </div>
              </p>
            </article>
           
          <aside class="data__links">
            <div class="data__links-container">
              <div class="data_card">
               <img src="{{url('assets/images/definition_sect/aviation_1.jpg')}}" alt="">
               <div>
                 <span class="data-card__desc">icon</span>
                 <span class="data-card__link"><a href="{{route('article.article', ['nameArt'=> 'qui_percois', 'id'=>4])}}">qui percoit le fpt</a></span>
                 
               </div>
              </div>

              <div class="data_card">
               <img src="{{url('assets/images/definition_sect/aviation_1.jpg')}}" alt="">
               <div>
                 <span class="data-card__desc">icon</span>
                 <span class="data-card__link"><a href="{{route('article.article', ['nameArt'=> 'quand_payer', 'id'=>2])}}">quand payer le FPT</a></span>
                 
               </div>
              </div>

              <div class="data_card">
               <img src="{{url('assets/images/definition_sect/aviation_1.jpg')}}" alt="">
               <div>
                 <span class="data-card__desc">icon</span>
                 <span class="data-card__link"><a href="{{route('article.article', ['nameArt'=> 'qui_paie', 'id'=>3])}}">qui paie le FPT</a></span>
                 
               </div>
              </div>

              <div class="data_card">
               <img src="{{url('assets/images/definition_sect/aviation_1.jpg')}}" alt="">
               <div>
                 <span class="data-card__desc">icon</span>
                 <span class="data-card__link"><a href="{{route('article.article', ['nameArt'=> 'comment_payer', 'id'=>1])}}">combie payer</a></span>
                 
               </div>
              </div>
         </div>

          </aside>
            
      </div>
        </div>
    </div>
</section> 
@endsection