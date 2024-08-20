@extends('layouts.app')
@section('content')
   <section class="section forum-section">
        <div class="container forum-container">
                
                <div class="question_answer">
                    <h1 class="section__title">All your questions about the FPT</h1>
                   @foreach ($data as $question)
                       
                  
                    <div class="unique_question">
                        <div class="unique_question_question">
                             <div class="question-identity">
                                <span class="question-icon"><i class="ri-user-fill"></i></span>
                                <span class="question-name">{{$question['user_name']}}</span>
                             </div>
                             <div class="question-question">
                               <div> <span class="question_date">{{$question['created_at']}}</span><span>{{$question['question']}}</span></div> <span class="forum-question_button-expand">+</span>
                             </div>
                        </div>
                           <ul class="answer_block">
                             @foreach ($question->answer as $answer)
                                 
                            <li class="answer_un"> 
                                 <div class="answer__identity">
                                    <span><i class="ri-user-fill"></i></span>
                                    <span>{{$answer['user_id']}}</span>
                                 </div>
                                 <div class="answer__answer"><span class="answer__date">{{$answer['created_at']}}</span> <span>{{$answer['answer']}}</span></div>
                            </li>
                            @endforeach
                           </ul>
                    </div>
                    @endforeach 

                </div>
                <div class="ask-question">
                    <span>
                        <i class="ri-question-mark-fill"></i> Ask a question
                    </span>
                    <div class="ask-question__container">
                       <form action="{{route('create.question')}}" method="POST" class="ask-question__form">
                           @csrf   
                        <!-- Name Address -->
                            <div class="input-item">
                                
                                <x-text-input id="name" class="input-item-text" type="text" name="user_name" placeholder="name" :value="old('user_name')" required autofocus autocomplete="user_name" />
                                <x-input-label for="name" :value="__('Name')" class="label-input"   />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                                <div class="input-item">
                                    
                                    <x-text-input id="email" class="input-item-text" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-label for="email" :value="__('Email')" class="label-input"   />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                           

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <textarea name="question" id="" cols="30"  placeholder="votre message" class="footermail__email-text"></textarea>
                            </div>

                            <div class="btn-psw_forgot">

                                <x-primary-button class="button">
                                    {{ __('Send') }}
                                </x-primary-button>
                            </div>

                       </form>
                    </div>
                </div>
        </div>
   </section>
@endsection