@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
{{--       
        <link rel="stylesheet" media="all" href="./css/reason.css"/> --}}
        <link rel="stylesheet" media="all" href="./css/top.css"/>
        <main id="main_wrap">

            <x-titlePage />
          <div id="faq">
            <!-- banner-page -->

               <!-- content-main -->
                <div class="content-main">
                    <!-- Career move-->

                    <div class="menu-list">
                        <div class="inner-list">
                            <a href="#p1" class="scroll menu-link">
                                <p class="title-flow"><span class="number-info">1</span>○○について</p>  
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13" fill="none">
                                    <path d="M2 2.5L10 10.5L18 2.5" fill="#2C4198"/>
                                    <path d="M2 2.5L10 10.5L18 2.5" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                              </a>
                              <a href="#p2" class="scroll menu-link">
                                  <p class="title-flow"><span class="number-info">2</span>○○について</p>  
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13" fill="none">
                                    <path d="M2 2.5L10 10.5L18 2.5" fill="#2C4198"/>
                                    <path d="M2 2.5L10 10.5L18 2.5" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                              </a>
                              <a href="#p3" class="scroll menu-link">
                                  <p class="title-flow"><span class="number-info">3</span>○○について</p>  
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13" viewBox="0 0 20 13" fill="none">
                                    <path d="M2 2.5L10 10.5L18 2.5" fill="#2C4198"/>
                                    <path d="M2 2.5L10 10.5L18 2.5" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                               </a>
                        </div>
   

        
                      </div>


                    <div class="box-main">
                    
                        <section class="box-question" id ="p1">
                            <div class="inner">
                                <h3 class="dt-info"> <span class="list-info">1</span>○○について</h3>
                                <ul class="list">
                                    <!--p1-->  
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>

                              </ul>
                            </div>
                        </section>
                        <div class="img-icon">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/top/icon_botom_sp.svg')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/top/icon_botom_pc.svg')}}">
                                <img class="sizes" src="{{asset('images/top/icon_botom_pc.svg')}}" alt="">
                            </picture>  
                         </div>
    
                   
                        <section class="box-question" id ="p2">
                            <div class="inner">
                                <h3 class="dt-info"> <span class="list-info">2</span>○○について</h3>
                                <ul class="list">
                                    <!--p1-->  
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>

                              </ul>
                            </div>
                        </section> 
                        <div class="img-icon">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/top/icon_botom_sp.svg')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/top/icon_botom_pc.svg')}}">
                                <img class="sizes" src="{{asset('images/top/icon_botom_pc.svg')}}" alt="">
                            </picture>  
                         </div>
                        <section class="box-question" id ="p3">
                            <div class="inner">
                                <h3 class="dt-info"> <span class="list-info">3</span>○○について</h3>
                                <ul class="list">
                                    <!--p1-->  
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>
                                    <li class="item">
                                        <h3 class="heading-toggle">
                                            <p class="text-title">テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                        </h3>
                                        <div class="content-toggle">
                                            <p class ="text-toggle">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>       
                                        </div>
                                    </li>

                              </ul>
                            </div>
                        </section>    
                        
                     </div>


                     <x-contactFooter />    






                </div>
        
        </div>         
          

    <script type="text/javascript" src="./js/recruit.js"></script> 

          
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
