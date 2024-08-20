@extends('layouts.app')
@section('content')
    <section class="section__download-pdf section">
        <div class="container container__download-pdf">
            <h1 class="section__title-1">Download all related documents</h1>
            <div class="download-pdf__content">
                  <div class="download-pdf__search">
                       <form action="" method="GET" class="download-pdf__search-form">
                        <div class="input-item">
                                    
                            <x-text-input id="search" class="input-item-text" type="text" name="search" placeholder="Search" :value="old('name')" required  autocomplete="name" />
                            <x-input-label for="search" :value="__('Search')" class="label-input"   />
                            <x-input-error :messages="$errors->get('search')" class="mt-2" />
                        
                        </div>
                        <x-primary-button class="button">
                            {{ __('Go') }}
                        </x-primary-button>
                       </form>
                  </div>
                  <div class="download-pdf__document">
                    @foreach ($data as $doc)
                  
                    <div class="download-pdf__card">
                        <span class="download-pdf__card-title">{{$doc->name}}</span>
                        <a href="{{route('view.pdf',['id'=>$doc->id])}}">
                        <div class="download-pdf__card-img-container">
                            <img src="" alt="image pdf here" class="download-pdf__card-img">
                        </div>
                        </a>
                        <span><a href="{{route('download.pdf',['id'=>$doc->id])}}">{{__('Download')}}</a></span>
                    </div>
                   
                    @endforeach
                    
                  </div>
            </div>
        </div>
    </section>    
@endsection
{{-- route('fpt.downloadPdf',['id'=> $doc->id]) --}}
{{-- route('fpt.searchPdf') --}}