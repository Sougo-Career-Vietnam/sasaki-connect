@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
      
        <link rel="stylesheet" media="all" href="./css/reason.css"/>
        <link rel="stylesheet" media="all" href="./css/top.css"/>
        <main id="main_wrap">

            <x-titlePage />
          <div id="service">
            <!-- banner-page -->

               <!-- content-main -->
                <div class="content-main">
                    <!-- Career move-->

    
    
    
    
     
    
    
    
      
                </div>
        
            </div>         
            
            <x-contactFooter />    


        <script type="text/javascript" src="./js/recruit.js"></script> 

            
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
