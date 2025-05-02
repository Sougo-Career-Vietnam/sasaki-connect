@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link rel="stylesheet" media="all" href="./css/top.css"/>
        <link rel="stylesheet" media="all" href="./css/reasons.css"/>
        <main id="main_wrap">

            <x-titlePage />
            <div id="reasons" class="reasons">
                <!-- strengths -->
                <section id="sc-strengths">
                    <div class="inner">
                        <div class="strengths-inner">
                            <h2 class="section-title">
                                <img class="sizes" src="{{asset('images/reasons/reasons_title.png')}}" alt="">
                                私たちの強み
                            </h2>
                            <div class="coming-soon">制作中</div>
                            <p class="text">
                                私たちは「人が現場を強くして、経営も強くする」というコンセプトを掲げております。<br />
                                お客様・スタッフ様・私たちの三方それぞれ良い結果になるよう、三方の好循環を作り上げることによって、スタッフ様には高い満足度と十分な還元を果たし、お客様には生産性・生産力が向上して生産活動が活発化し、企業経営を強くすることを目指します。<br />
                                人も生産活動も健康体の血液のような好循環を実現し、DNAのように人と技術の双方から日本の製造業を足元から強くしていくことを目指して、人材サービスとして私たちSASAKI CONNECTが尽力いたします。
                            </p>
                        </div>
                    </div>
                </section>
    
    
                <!-- benefits -->
                <section id="sc-benefits">
                    <div class="inner">
                        <div class="benefits-inner">
                            <h2 class="section-title">
                                <img class="sizes" src="{{asset('images/reasons/reasons_title.png')}}" alt="">
                                選ばれる理由
                            </h2>
                            <div class="list">
                                <div class="group">
                                    <div class="group-head">
                                        <div class="circle">理由<br />
                                            <span class="small">その</span>
                                            <span class="num">1</span>
                                        </div>
                                        <h3 class="group-title">自社工場を持つゆえに製造現場に強く、<br class="sp-br" />製造現場の悩みに直接お応えする</h3>
                                    </div>
                                    <div class="img">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/reasons/reasons_benefits_01_sp.jpg')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/reasons/reasons_benefits_01_pc.jpg')}}">
                                            <img class="sizes" src="{{asset('images/reasons/reasons_benefits_01_pc.jpg')}}" alt="社屋外観">
                                        </picture>
                                    </div>
                                    <p class="text">
                                        弊社はハーネス製造のササキのグループ会社です。本社はササキ自社工場に直結しており、製造現場の状況を熟知しております。<br />
                                        製造現場をもつ強みを活かして、製造現場におけるボトルネックや人材不足などにおける課題やニーズへのキャッチなど「現場感」の課題を深く理解することができます。それゆえ製造現場へのお悩みに直接お応えができる提案ができるのです。
                                    </p>
                                </div>
                                <div class="group">
                                    <div class="group-head">
                                        <div class="circle">理由<br />
                                            <span class="small">その</span>
                                            <span class="num">2</span>
                                        </div>
                                        <h3 class="group-title">半導体や医療機器、航空宇宙防衛産業な<br class="sp-br" />ど成長事業・産業に特に強い</h3>
                                    </div>
                                    <div class="img">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/reasons/reasons_benefits_02_sp.jpg')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/reasons/reasons_benefits_02_pc.jpg')}}">
                                            <img class="sizes" src="{{asset('images/reasons/reasons_benefits_02_pc.jpg')}}" alt="作業の様子">
                                        </picture>
                                    </div>
                                    <p class="text">
                                        弊社は製造業の顧客様への人材サービスに特化しておりますが、なかでも成長著しい半導体製造・組み立て関連や、医療機器製造、航空宇宙・防衛産業への製造業は特に強く、これらの成長事業・産業に対してより細やかなご提案をいたします。人材ニーズとしてもスキルアップやキャリアのステップアップを望む人材が多いことから双方のニーズをコネクトすることを得意とする会社であります。
                                    </p>
                                </div>
                                <div class="group">
                                    <div class="group-head">
                                        <div class="circle">理由<br />
                                            <span class="small">その</span>
                                            <span class="num">3</span>
                                        </div>
                                        <h3 class="group-title">「強い人材・労働力」の提供及び支援</h3>
                                    </div>
                                    <div class="img">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/reasons/reasons_benefits_03_sp.jpg')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/reasons/reasons_benefits_03_pc.jpg')}}">
                                            <img class="sizes" src="{{asset('images/reasons/reasons_benefits_03_pc.jpg')}}" alt="男性社員">
                                        </picture>
                                    </div>
                                    <p class="text">
                                        人材サービスと言っても、誰でもよいというわけではございません。貴社の現場に合わせたスキル、マインドなど必要不可欠な部分がございます。たとえ未経験であっても製造業についての基礎知識、スキルを自社で研修し、お客様の現場へとお繋ぎすることができます。これは実際に製造現場を持つ弊社だからこその強みゆえであり、よりお客様のご要望にあわせた「強い」人材提供が可能になります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
    
                <!-- feedbacks -->
                <section id="sc-feedbacks">
                    <div class="line line1">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/reasons/reasons_feedback_sp.png')}}">
                            <source media="(min-width: 768px)" srcset="{{asset('images/reasons/reasons_feedback_pc.png')}}">
                            <img class="sizes" src="{{asset('images/reasons/reasons_feedback_pc.png')}}" alt="">
                        </picture>
                    </div>
                    <div class="line line2">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/reasons/reasons_feedback_sp.png')}}">
                            <source media="(min-width: 768px)" srcset="{{asset('images/reasons/reasons_feedback_pc.png')}}">
                            <img class="sizes" src="{{asset('images/reasons/reasons_feedback_pc.png')}}" alt="">
                        </picture>
                    </div>
                    <div class="inner">
                        <div class="feedbacks-inner">
                            <h2 class="feedbacks-title">
                                <img class="sizes" src="{{asset('images/reasons/reasons_title.png')}}" alt="">
                                お客様の声
                            </h2>
                            <div class="list">
                                <div class="box">
                                    <h3 class="box-title">製造業<span class="span-es">TE</span>社（長野県）採用担当T様</h3>
                                    <p class="text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                </div>
                                <div class="box">
                                    <h3 class="box-title">製造業<span class="span-es">P</span>社（山梨県）工場長K様</h3>
                                    <p class="text">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div> 
           <x-contactFooter />           
          



    <script type="text/javascript" src="./js/recruit.js"></script> 

          
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
