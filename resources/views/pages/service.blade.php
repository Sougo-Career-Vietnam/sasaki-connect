@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
      
        <link rel="stylesheet" media="all" href="./css/service.css"/>
        <link rel="stylesheet" media="all" href="./css/top.css"/>
        <main id="main_wrap">

            <x-titlePage />

           
        <div id="service" class="service">
            <!-- endpoint -->
            <div id="sc-endpoint">
                <div class="inner">
                    <div class="endpoint-inner">
                        <a href="#sc-manufacture" class="link scroll">製造業特化型人材サービス</a>
                        <a href="#sc-seekers" class="link scroll">求職者向けお仕事紹介サービス</a>
                    </div>
                </div>
            </div>

            <!-- manufacture -->
            <section id="sc-manufacture">
                <div class="inner">
                    <h2 class="section-title">
                        <img class="sizes" src="{{asset('images/service/service_title.png')}}" alt="">
                        製造業特化型人材サービス
                    </h2>
                    <div class="box">
                        <h3 class="box-title">こんなお悩みはありませんか？</h3>
                        <div class="img">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/service/service_manufacture_sp.png')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/service/service_manufacture_pc.png')}}">
                                <img class="sizes" src="{{asset('images/service/service_manufacture_pc.png')}}" alt="社員のイラスト">
                            </picture>
                        </div>
                        <ul class="list">
                            <li class="text">人材不足で困っている</li>
                            <li class="text">採用ができず応募が来ない</li>
                            <li class="text">スタッフが定着しない</li>
                            <li class="text">増産のため現場スタッフを増員したい</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- solutions -->
            <section id="sc-solutions">
                <div class="inner">
                    <div class="solutions-inner">
                        <div class="content">
                            <h3 class="block-title">当社4つのソリューション</h3>
                            <p class="text-bold">人材不足の「困った」を<br />さまざまな角度からアプローチします</p>
                            <p class="text">
                                私たちは「人が現場を強くして、経営も強くする」というコンセプトを掲げております。<br />
                                SASAKI CONNECTでは人材に対するお困りに対し、企業様それぞれの背景を詳しく伺いまして、「人材派遣」「人材紹介」「製造請負」「採用コンサルティング」の4つの面からアプローチいたします。特に中長期的な人材育成面を鑑みて、人材紹介は私たちSASAKI CONNECTが最も得意とするところです。
                            </p>
                        </div>
                        <div class="coming-soon">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/service/service_map_sp.png')}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/service/service_map_pc.png')}} 2x">
                                <img class="sizes" src="{{asset('images/service/service_map_pc.png')}}" alt="社員のイラスト">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>

            <!-- problems -->
            <section id="sc-problems">
                <div class="problems-inner">
                    <h3 class="title">こういった「困った」に全力でお応えします</h3>
                    <div class="list">
                        <p class="text">人事・労務の手間や<br />固定費を削減したい</p>
                        <p class="text">繁忙期に増員が必要</p>
                        <p class="text">特定の業務のみを<br />委託したい</p>
                        <p class="text">新規採用に不安がある</p>
                        <p class="text">専門職のスキルを<br />持った人材が必要</p>
                        <p class="text">技術者養成の時間と<br />経費がない</p>
                        <p class="text text-fit">生産設備の稼働率を<br />高めたい・扱う人がいない</p>
                       
                    </div>
                    <div class="img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/service/service_problems_sp.png')}}">
                            <source media="(min-width: 768px)" srcset="{{asset('images/service/service_problems_pc.png')}}">
                            <img class="sizes" src="{{asset('images/service/service_problems_pc.png')}}" alt="社員のイラスト">
                        </picture>
                    </div>
                </div>
            </section>

            <!-- highlights -->
            <section id="sc-highlights">
                <div class="inner">
                    <h3 class="block-title">サービスのポイント</h3>
                    <ul class="list">
                        <li class="text">現場レベルのお悩みから、経営改善における人材戦略まで対応いたします</li>
                        <li class="text">高度技術・成長産業は特に得意としており、特化した人材戦略をご提供いたします</li>
                        <li class="text">採用力や人材育成、請負までお客様の製造現場に合わせたご提案をいたします</li>
                        <li class="text">お客様の課題に対して親身になって伺い、柔軟に考えてご提案いたします</li>
                    </ul>
                    <a href="{{Route('top')}}/reason" class="link">選ばれる理由ページへ</a>
                </div>
            </section>

            <!-- particular -->
            <section id="sc-particular">
                <div class="inner">
                    <h3 class="block-title">特に強い業界・分野・職種</h3>
                    <div class="industries">
                        <h4 class="title">◆ &nbsp;業界</h4>
                        <div class="list">
                            <div class="item">
                                <p class="text">半導体製造</p>
                                <div class="img">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/service/service_particular_01_sp.jpg')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/service/service_particular_01_pc.jpg')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_01_pc.jpg')}}" alt="半導体製造">
                                    </picture>
                                </div>
                            </div>
                            <div class="item">
                                <p class="text">航空・宇宙・防衛関連</p>
                                <div class="img">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/service/service_particular_02_sp.jpg')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/service/service_particular_02_pc.jpg')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_02_pc.jpg')}}" alt="ロケットの写真">
                                    </picture>
                                </div>
                            </div>
                            <div class="item">
                                <p class="text">医療機器製造</p>
                                <div class="img">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/service/service_particular_03_sp.jpg')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/service/service_particular_03_pc.jpg')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_03_pc.jpg')}}" alt="製造の様子">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fields">
                        <h4 class="title">◆ &nbsp;分野</h4>
                        <div class="list">
                            <div class="item item1">
                                <div class="img">
                                    <picture>
                                        <source srcset="{{asset('images/service/service_particular_icon_01.png')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_icon_01.png')}}" alt="">
                                    </picture>
                                </div>
                                <p class="text">生産技術</p>
                            </div>
                            <div class="item item2">
                                <div class="img">
                                    <picture>
                                        <source srcset="{{asset('images/service/service_particular_icon_02.png')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_icon_02.png')}}" alt="">
                                    </picture>
                                </div>
                                <p class="text">開発</p>
                            </div>
                            <div class="item item3">
                                <div class="img">
                                    <picture>
                                        <source srcset="{{asset('images/service/service_particular_icon_03.png')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_icon_03.png')}}" alt="">
                                    </picture>
                                </div>
                                <p class="text">製造</p>
                            </div>
                            <div class="item item4">
                                <div class="img">
                                    <picture>
                                        <source srcset="{{asset('images/service/service_particular_icon_04.png')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_icon_04.png')}}" alt="">
                                    </picture>
                                </div>
                                <p class="text">電気設計</p>
                            </div>
                            <div class="item item5">
                                <div class="img">
                                    <picture>
                                        <source srcset="{{asset('images/service/service_particular_icon_05.png')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_icon_05.png')}}" alt="">
                                    </picture>
                                </div>
                                <p class="text">機械設計</p>
                            </div>
                            <div class="item item6">
                                <div class="img">
                                    <picture>
                                        <source srcset="{{asset('images/service/service_particular_icon_06.png')}}">
                                        <img class="sizes" src="{{asset('images/service/service_particular_icon_06.png')}}" alt="">
                                    </picture>
                                </div>
                                <p class="text">物流</p>
                            </div>
                        </div>
                    </div>
                    <div class="occupations">
                        <h4 class="title">◆ &nbsp;職種</h4>
                        <div class="list">
                            <p class="text">●ハーネス加工</p>
                            <p class="text">●CADオペレーター</p>
                            <p class="text">●プロセス技術</p>
                            <p class="text">●生産管理</p>
                            <p class="text">●現地スタートアップ</p>
                            <p class="text">●現地検査・調整</p>
                            <p class="text">●装置設計</p>
                            <p class="text">●装置組立 &nbsp;ほか</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- contact -->
            <section id="sc-contact">
                <div class="inner">
                    <div class="contact-inner">
                        <div class="img">
                            <picture>
                                <source srcset="{{asset('images/service/service_contact.jpg')}}">
                                <img class="sizes" src="{{asset('images/service/service_contact.jpg')}}" alt="採用担当者">
                            </picture>
                        </div>
                        <dl class="content">
                            <dt class="title">現場で働く方々と企業の“信頼の懸け橋”に</dt>
                            <dd class="text">現場で働く方々と企業の“信頼の懸け橋”になれるよう、誠実な対応を心がけています。製造業のリアルな課題に寄り添いながら、ミスマッチのないご提案を目指しています。“任せてよかった”と感じていただけるよう、全力でサポートいたします。（WFS事業部・榛原）</dd>
                        </dl>
                    </div>
                    <a href="{{Route('top')}}/contact" class="link">お問い合わせ・ご相談はこちら</a>
                </div>
            </section>

            <!-- seekers -->
            <section id="sc-seekers">
                <div class="line">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{asset('images/service/service_seekers_line_sp.png')}}">
                        <source media="(min-width: 768px)" srcset="{{asset('images/service/service_seekers_line_pc.png')}}">
                        <img class="sizes" src="{{asset('images/service/service_seekers_line_pc.png')}}" alt="">
                    </picture>
                </div>
                <div class="inner">
                    <h2 class="section-title">
                        <img class="sizes" src="{{asset('images/service/service_title.png')}}" alt="">
                        求職者向けお仕事紹介サービス
                    </h2>
                </div>
                <div class="seekers-inner">
                    <div class="content">
                        <p class="text-bold">個性や強みを活かして<br />自己成長につながるお仕事を紹介します</p>
                        <p class="text">求職者のみなさまへ。私たちSASAKI CONNECTは製造業に特化したお仕事紹介または派遣サービスをご紹介しています。製造業の中でも大手・成長産業分野に強い当社が、正社員就職やキャリア転職など、あなたのステップアップを応援いたします。</p>
                    </div>
                    <div class="img">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/service/service_seekers_01_sp.jpg')}}">
                            <source media="(min-width: 768px)" srcset="{{asset('images/service/service_seekers_01_pc.jpg')}}">
                            <img class="sizes" src="{{asset('images/service/service_seekers_01_pc.jpg')}}" alt="男性社員">
                        </picture>
                    </div>
                    <div class="box">
                        <h3 class="box-title">当社でお仕事をするメリット</h3>
                        <ul class="list">
                            <li class="text">安定の大手製造業で仕事ができます</li>
                            <li class="text">スキルアップができます</li>
                            <li class="text">付加価値の高い業務経験でキャリアアップも</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- recruit -->
            <section id="sc-recruit">
                <div class="recruit-inner">
                    <h2 class="section-title">
                        <img class="sizes" src="{{asset('images/service/service_title.png')}}" alt="">
                        採用・お仕事情報
                    </h2>
                    <div class="grid">
                        <p class="text">詳しくはこちらの<br class="sp-br" />お仕事をお探しの方へのページをご覧ください</p>
                        <dl class="box">
                            <dt class="box-title"><span>＂</span>一段上の<span>＂</span>お仕事で確かなスキルを</dt>
                            <dd class="box-text">SASAKI CONNECTで<br class="sp-br" />安定・ハイスキルの仕事を見つけよう！</dd>
                        </dl>
                        <div class="img">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/service/service_recruit_sp.jpg')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/service/service_recruit_pc.jpg')}}">
                                <img class="sizes" src="{{asset('images/service/service_recruit_pc.jpg')}}" alt="笑顔の男性社員と女性社員">
                            </picture>
                        </div>
                        <a href="{{Route('top')}}/recruit" class="link">詳しくはこちら</a>
                    </div>
                </div>
            </section>
        </div> 




            
            <x-contactFooter />    


        {{-- <script type="text/javascript" src="./js/recruit.js"></script>  --}}
        <script type="text/javascript" src="./js/service.js"></script> 
            
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
