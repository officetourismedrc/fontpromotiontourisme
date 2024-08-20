@extends('layouts.app')
@section('content')
    
<section class="section section_data">
       
    <div class="data_container container">
        <div class="data__content">
             

            <div class="data__main-block">
               
                <article class="data__article">
                  <h1 class="section__title">Quand payer le Fpt?</h1>
                
                  <p class="data__desc">
                      Avant le 15 du mois suivant pour le fpt collecté le mois précedent
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