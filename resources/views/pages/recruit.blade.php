@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
        <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="all" href="./css/recruit.css"/>
        <main id="main_wrap">

          
          <div id="recruit">
            <!-- banner-page -->
                <section class="banner-page">
                     <picture>
                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_main_sp.jpg')}} 2x">
                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_main_pc.jpg')}} 2x">
                        <img class="sizes" src="{{asset('images/lp/recruit_main_pc.jpg')}}" alt="製造メーカー・ササキグループの人材サービス会社だから安心！ステップアップしたいあなたに正社員の仕事も派遣の仕事もここにあります！">
                    </picture>  
                    <div class ="text-main">
                        <ul class="list-title flex">
                            <li class="item-title">大手製造業が中心</li>
                            <li class="item-title">良好な職場環境</li>
                            <li class="item-title">スキルが身につく</li>
                        </ul>
                        <p class="text-01">製造メーカー・ササキグループの<br>人材サービス会社だから安心<span class="big">！</span></p>
                        <p class="text-02">ステップアップ<span class="samll">したいあなたに</span></p>
                        <p class="text-03">正社員<span class="samll two">の</span>仕事<span class="samll">も</span>派遣<span class="samll two">の</span>仕事<span class="samll">も</span></p>
                        <p class="text-04">ここにあります<span class="big two">！</span></p>
    
                        <div class="list-button flex destop">
                            <a class="link-search" href="{{Route('top')}}/search/">求人情報はこちらから</a>
                            <a class="link-entry" href="{{Route('top')}}/recruit/form/">ご登録はこちらから</a>
                        </div>
    
                    </div>
                    <div class="list-button flex mobi">
                        <a class="link-search" href="{{Route('top')}}/search/">求人情報はこちらから</a>
                        <a class="link-entry" href="{{Route('top')}}/recruit/form/">ご登録はこちらから</a>
                    </div>
                    
    
                </section>
               <!-- content-main -->
                <div class="content-main">
                    <!-- Career move-->
                    <section class="box-career">
                        <div class="box-title">
                            <h3 class="title-page one">お仕事お探しの方、転職をお考えの方<br>こんなお悩みはございませんか？</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <div class="box-content flex">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_01_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_01_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/lp/recruit_pic_01_pc.png')}}" alt="考えている男性">
                                </picture> 
                                <ul class="list-point">
                                    <li class="item-point">なかなか良い仕事が見つからない</li>
                                    <li class="item-point">安定的で有名な企業で働きたい</li>
                                    <li class="item-point">今の会社ではスキルが身につかないのでスキルアップをしたい</li>
                                    <li class="item-point">経験を活かしてもっとキャリアアップ、給料アップしたい</li>
                                    <li class="item-point">もっとスケールの大きい仕事をしたい</li>
                                </ul>
                           </div>
                        </div>

                    </section>
                   <!-- Point-->
                   <section class="box-point">
                        <div class="box-title two">
                            <h3 class="title-page two">ここが違う！<br>SASAKI CONNECTの3つのポイント</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <div class="box-content">
                                <ul class="list-point-sakaki">
                                    <li class="item-sakaki flex">
                                        <div class="number-point">
                                            <p class="text">POINT</p>
                                            <p class="number">1</p>
                                        </div>
    
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_02_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_02_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/lp/recruit_pic_02_pc.png')}}" alt="工場の写真">
                                        </picture> 
                                        <dl class="dl-point">
                                            <dt class="dt-point">安定の大手製造業で<br class="pc-br">仕事ができる！</dt>
                                            <dd class="dd-point">当社のお仕事は、半導体製造装置や航空宇宙防衛関係の製品など名だたる大手製造業の企業様が多く、スケールが大きい一流の技術に触れる現場で仕事ができます。</dd>
                                        </dl>
    
                                    </li>
                                    <li class="item-sakaki flex">
                                        <div class="number-point">
                                            <p class="text">POINT</p>
                                            <p class="number">2</p>
                                        </div>
    
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_03_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_03_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/lp/recruit_pic_03_pc.png')}}" alt="男性社員">
                                        </picture> 
                                        <dl class="dl-point">
                                            <dt class="dt-point">スキルアップができます！</dt>
                                            <dd class="dd-point">お仕事の中には海外での装置を立ち上げ（スタートアップ）、調整業務もございます。<br>業務を通して、他の派遣会社や製造業ではなかなか経験できないスキルを身につけることができます。</dd>
                                        </dl>
                                    </li>
                                    <li class="item-sakaki flex">
                                        <div class="number-point">
                                            <p class="text">POINT</p>
                                            <p class="number">3</p>
                                        </div>
    
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_04_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_04_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/lp/recruit_pic_04_pc.png')}}" alt="作業をしている男性社員">
                                        </picture> 
                                        <dl class="dl-point">
                                            <dt class="dt-point">付加価値の高い業務経験で<br>キャリアアップも</dt>
                                            <dd class="dd-point">専門的なスキルを要する付加価値の高い業務が多いことから時給や給与が他社より高くご提示できます。<br>将来のキャリアアップの第一歩にもぜひ。</dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   </section>
    
                    <!-- box-job -->
                    <section class="box-job">
                        <div class="box-title">
                            <h3 class="title-page three">あなたのキャリアアップを応援！<br>SASAKI CONNECTが紹介するお仕事はこちら</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <ul class="list-job flex">
                                <li class="item-job">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_05_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_05_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_05_pc.png')}}" alt="作業の様子">
                                    </picture> 
                                    <dl class="dl-job">
                                        <dt class="dt-job">半導体製造装置の立ち上げ業務</dt>
                                        <dd class="dd-job">海外での半導体製造装置の立ち上げ業務に携わるお仕事です。<br class="pc-br">機器部品の設置や動作チェック、検査修正など製品クオリティに関わる重要な業務をお任せいたします。</dd>
                                    </dl>
                                </li>
                                <li class="item-job">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_07_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_07_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_07_pc.png')}}" alt="PC業務を行う男性社員">
                                    </picture> 
                                    <dl class="dl-job">
                                        <dt class="dt-job">装置関連の製造・設計・管理業務</dt>
                                        <dd class="dd-job">半導体製造装置の組立だけではなく、組立におけるサポート業務もございます。主に仕様書作成から工程管理、工具管理、設計サポートなど製造現場を中枢を担う業務です。</dd>
                                    </dl>
                                </li>
                                <li class="item-job">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_06_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_06_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_06_pc.png')}}" alt="作業の様子">
                                    </picture> 
                                    <dl class="dl-job">
                                        <dt class="dt-job">半導体製造装置の組立業務</dt>
                                        <dd class="dd-job">お客様の構内にて半導体製造装置の組立業務をお任せいたします。<br class="pc-br">半導体製造装置は多種多様な装置がございますので現場で学びながら業務を遂行いたします。</dd>
                                    </dl>
    
                                </li>
                                <li class="item-job">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_08_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_08_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_08_pc.png')}}" alt="ロケットの写真">
                                    </picture> 
                                    <dl class="dl-job">
                                        <dt class="dt-job">航空宇宙・防衛関係製品の製造</dt>
                                        <dd class="dd-job">お客様の構内にて航空宇宙関係製品や防衛関係製品の製造を行います。精密機器や飛行機部品などの製造現場に携わります。</dd>
                                    </dl>
                                </li>
                            </ul>
    
                        </div>
    
    
                    </section>
    
                    <!-- box-work -->
                    <section class="box-work">
                        <div class="box-title">
                            <h3 class="title-page four">正社員・派遣社員<br>どちらもあなた次第！</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <ul class="list-work flex">
                                <li class="item-work">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_09_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_09_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_09_pc.png')}}" alt="男女社員の写真">
                                    </picture> 
                                    <dl class="dl-work">
                                        <dt class="dt-work">正社員<span class="small-work">（正社員は職業紹介が主となります）</span></dt>
                                        <dd class="dd-work">月給制・賞与支給はもちろん、諸待遇は完備！<br>安心の環境で製造業のプロフェッショナルとしてご活躍いただきます。<br class="sp-br">※基本的に職業紹介でのご紹介ですが、当社SASAKI CONNECTでの正社員もございます。</dd>
                                    </dl>
                                </li>
                                <li class="item-work">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_10_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_10_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_10_pc.png')}}" alt="笑顔の女性社員">
                                    </picture> 
                                    <dl class="dl-work two">
                                        <dt class="dt-work">派遣社員</dt>
                                        <dd class="dd-work">派遣社員は、ご希望やお住まいの場所を考慮して勤務いただくケースがほとんどです。なお、派遣社員も有給休暇はございますし、交通費も支給いたします。</dd>
                                    </dl>
    
                                </li>
    
                            </ul>
                        </div>
    
    
                    </section>
    
    
    
    
                    <!-- box-features -->
                    <section class="box-features">
                        <div class="box-title">
                            <h3 class="title-page five">SASAKI CONNECTで働くスタッフたちも<br class="sp-br">高評価！<br class="pc-br">高い満足度のヒミツ</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <ul class="list-features">
                                <li class="item-features flex">
                                    <dl class="dl-features">
                                        <dt class="dt-main">ヒミツその<span class="number-samll">1</span></dt>
                                        <dt class="dt-features">大手企業の案件を多く持っており、<br>働く環境が良い</dt>
                                        <dd class="dd-features">SASAKI CONNECTは大手企業が多いことはもとより、市場価値の高いお仕事紹介案件が多くございます。ステップアップしたい方や正社員を目指したい人にとって、さらなるキャリアアップや待遇アップが期待できるでしょう。<br>また、何かしらの製造業の現場を経験されている方であれば、ご自身の経歴を活かして飛躍的に成長することも見込めます。ぜひご相談ください。</dd>
                                    </dl>
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_11_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_11_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_11_pc.png')}}" alt="企業の建物">
                                    </picture> 
                                </li>
    
                                <li class="item-features flex">
                                    <dl class="dl-features two">
                                        <dt class="dt-main">ヒミツその<span class="number-samll">2</span></dt>
                                        <dt class="dt-features">スタッフへのフォローがマメなので<br>安心して働ける！</dt>
                                        <dd class="dd-features">SASAKI CONNECTが自慢にしていること、それは「当社スタッフはマメにフォローをする」ことです。スタッフの皆様でお仕事が成り立っていますのでお仕事における疑問や不安など小さなことから対応させていただいております。ありがたいことに、働いている皆様にも「SASAKI CONNECTでは安心して働ける！」と評判いただけております。</dd>
                                    </dl>
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_12_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_12_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_12_pc.png')}}" alt="会話する社員の様子">
                                    </picture> 
                                </li>
    
    
               
    
                            </ul>
                            <div class="box-last">
                                <li class="item-features flex last">
                                    <div class="last-box">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_13_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_13_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/lp/recruit_pic_13_pc.png')}}" alt="笑顔の社員">
                                        </picture> 
                                        <p class="text-arrow">
                                            さらに <span class="es-chance">CHANCE</span><span class="es-chance02">！</span>
                                        </p>
                                    </div>
                       
                                    <dl class="dl-features last">
                                        <dt class="dt-features last">当社では正社員になりたい方も大歓迎です！</dt>
                                        <dd class="dd-features last">派遣社員には有給休暇や交通費支給がございますが、正社員になるとこれらに加えて、賞与支給や昇進のチャンスもございます。<br>また当社親会社の株式会社ササキ主催の各種イベント（社員旅行やBBQ、忘年会、お花見など）にもご参加いただくことができます。<br>会社を通して、キャリアアップはもちろん一生の仲間ができる…そういったことにつながれば幸いです。</dd>
                                    </dl>
                         
                                </li>
                            </div>
    
                        </div>
    
    
                    </section>
    
                    <!-- box-voice -->
                    <section class="box-voice">
                        <div class="box-title">
                            <h3 class="title-page six">喜びの声も！<br>スタッフさんたちのビフォーアフター</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <ul class="list-voice flex">
                                <li class="item-voice">
                                    <dl class="dl-top">
                                        <dt class="dt-top">山梨県在住  Y.M.さん（20代）</dt>
                                        <dt class="dt-top02">前職</dt>
                                        <dd class="dd-top">これまで製造業、飲食業、営業職等さまざまな職種を経験してきました。しかし、もう一度製造業の現場でスキルを身に付けたいという思いが強くなり、転職を決意しました。</dd>
                                    </dl>
                                    <dl class="dl-bottom">
                                        <dt class="dt-bottom">現在</dt>
                                        <dd class="dd-bottom">現在は製造業で、新しい技術を学びながら、着実にスキルを磨いています。<br>手を動かしてものを作り上げる喜びを<br class="pc-br">日々実感しており、将来に向けた自信が付いてきています。</dd>
                                    </dl>
                                </li>
                                <li class="item-voice">
                                    <dl class="dl-top two">
                                        <dt class="dt-top">宮城県在住  M.Y.さん（30代）</dt>
                                        <dt class="dt-top02">前職</dt>
                                        <dd class="dd-top">地元（愛知県）のカーディーラーで整備士、海外企業向けの商社で働いていました。ですが、もっと幅広いスキルを身につけたい、特に海外での経験を積みたいと思い転職を決意しました。</dd>
                                    </dl>
                                    <dl class="dl-bottom">
                                        <dt class="dt-bottom">現在</dt>
                                        <dd class="dd-bottom">装置組立に関しては未経験での入社になりましたが、ベテラン社員さんからの手厚い研修によりサポートを受けながら業務にあたれています。<br class="sp-br">現在はエンジニアとして海外で装置の組立業務に従事しています。実際に現地での立ち上げ作業を行い、異文化環境の中で技術力と柔軟な対応力を磨いています。</dd>
                                    </dl>
                                </li>
                                <li class="item-voice">
                                    <dl class="dl-top three">
                                        <dt class="dt-top">長野県在住 Y.N.さん（30代）</dt>
                                        <dt class="dt-top02">前職</dt>
                                        <dd class="dd-top">地元の自動車部品工場で働いた後、派遣社員としてさまざまな現場を経験しました。その中で、大規模なプロジェクトに携わる現場を見学し、自分もこんなスケールの大きな仕事に関わりたいと思いました。</dd>
                                    </dl>
                                    <dl class="dl-bottom">
                                        <dt class="dt-bottom">現在</dt>
                                        <dd class="dd-bottom">現在は航空宇宙・防衛関連の製品製造に携わっています。<br>精密さと責任が求められる仕事にやりがいを感じ、スキルアップを実感しています！</dd>
                                    </dl>
                                </li>
                            </ul>
                                <div class="item-voice-last">
                                    <div class="inner-voice flex">
                                        <picture class="last-box">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_14_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_14_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/lp/recruit_pic_14_pc.png')}}" alt="採用担当の写真">
                                        </picture> 
                                        <div class="dl-voice">
                                            <dt class="dt-voice">個性や強みを活かして輝ける場所が、<br class="sp-br">SASAKI CONNECTです！</dt>
                                            <dd class="dd-voice">未経験の方でも一歩踏み出す勇気さえあれば、ここで新たな自分を見つけることができます。<br>経験者の方は今までのスキルを活かしながら、さらに成長できるフィールドをご用意しています。
                                                それぞれの個性や強みを活かして輝ける場所が、私たちの職場です！（採用担当　榛原）</dd>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </section>
    
                    <!-- box-flow -->
                    <section class="box-flow">
                        <div class="box-title sever">
                            <h3 class="title-page sever">お仕事開始までの流れ</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <ul class="list-flow flex">
                                <li class="item-flow">
                                    <dl class="dl-flow">
                                        <dt class="dt-flow">STEP<span class="number-flow">1</span></dt>
                                        <dd class="dd-flow">お問い合わせ</dd>
                                    </dl>
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_15_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_15_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_15_pc.png')}}" alt="携帯電話">
                                    </picture> 
                                    <p class="text-flow">
                                        このページ最下部の「求人案件から探す」ボタンから求人案件にエントリー、<br class="pc-br">または「ご登録はこちらから」ボタンからエントリーをお願いします。
                                    </p>
                                </li>
    
                                <li class="item-flow">
                                    <dl class="dl-flow">
                                        <dt class="dt-flow">STEP<span class="number-flow">2</span></dt>
                                        <dd class="dd-flow">面接・登録</dd>
                                    </dl>
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_16_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_16_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_16_pc.png')}}" alt="面接の様子">
                                    </picture> 
                                    <p class="text-flow">
                                        当社でご面談、または派遣のご登録を行っていただきます。<br>当社コーディネーターがあなたのご希望やご意向を詳しく伺います。
                                    </p>
                                </li>
    
                                <li class="item-flow">
                                    <dl class="dl-flow">
                                        <dt class="dt-flow">STEP<span class="number-flow">3</span></dt>
                                        <dd class="dd-flow">お仕事紹介</dd>
                                    </dl>
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_17_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_17_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_17_pc.png')}}" alt="女性社員">
                                    </picture> 
                                    <p class="text-flow">
                                        派遣の方はあなたの適性やご希望に合わせてご提案。ご希望に合えば職場見学へ進みます。正社員ご希望の方にも同様に、ご就業いただく企業を紹介、面接へと進めてまいります。
                                    </p>
                                </li>
    
                                <li class="item-flow">
                                    <dl class="dl-flow">
                                        <dt class="dt-flow">STEP<span class="number-flow">4</span></dt>
                                        <dd class="dd-flow">内定・入社、就業へ</dd>
                                    </dl>
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/lp/recruit_pic_18_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/lp/recruit_pic_18_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/lp/recruit_pic_18_pc.png')}}" alt="作業をしている男性社員">
                                    </picture> 
                                    <p class="text-flow">
                                        あなたと紹介先企業側の双方が合意いただいたら晴れて入社です！<br>ご都合の良い日からご就業いただきます。
                                    </p>
                                </li>
    
    
          
                            </ul>
                        </div>
    
    
                    </section>
    
                    <!-- box-question -->
                    <section class="box-question">
                        <div class="box-title">
                            <h3 class="title-page egg">入社に関する<br>よくあるご質問</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <ul class="list">
                                <!--p1-->  
                                <li class="item">
                                    <h3 class="heading-toggle">
                                        <p class="text-title">スタッフ登録はどこから行えば良いですか？</p>
                                    </h3>
                                    <div class="content-toggle">
                                        <p class ="text-toggle">各求人募集からご応募いただきましたら、当社よりご連絡いたします。<br>もしくは、<a class="line" href="http://jobs.technologies-group.co.jp/commissions/company_view/1619" target="_blank">こちら</a>からのご登録も可能です。お気軽にご登録ください。</p>       
                                    </div>
                                </li>
                                <li class="item">
                                    <h3 class="heading-toggle">
                                        <p class="text-title">派遣のお仕事だけですか？</p>
                                    </h3>
                                    <div class="content-toggle">
                                        <p class ="text-toggle">登録型派遣はもちろん、派遣先での直接雇用を見据えた紹介予定派遣、人材紹介募集とさまざまな雇用形態で募集しています。<br>もちろんSASAKI CONNECTの正社員としてのお仕事もあります。 まずはご相談ください！</p>       
                                    </div>
                                </li>
                                <li class="item">
                                    <h3 class="heading-toggle">
                                        <p class="text-title">製造業は初めてなので、いろいろ聞きたいことがあるのですが…</p>
                                    </h3>
                                    <div class="content-toggle" >
                                        <p class ="text-toggle">もちろんです！なんでも聞いてください。<br>製造現場と人材に関するプロスタッフが、SASAKI CONNECTには揃っています。<br>工場見学も積極的に開催していますので製造職のイメージもつきやすいですし、事前研修も行っていますのでご安心ください。</p>       
                                    </div>
                                </li>
                                <li class="item">
                                    <h3 class="heading-toggle">
                                        <p class="text-title">社会保険や有給休暇、健康診断などの福利厚生はありますか？</p>
                                    </h3>
                                    <div class="content-toggle">
                                        <p class ="text-toggle">当社は下記の通り各種制度、福利厚生をご用意しております。<br>●社会保険<br>加入条件を満たす方は健康保険・厚生年金・雇用保険へ加入していただきます。<br>●有給休暇<br>お仕事をはじめた日から6ヵ月以上就業している方に勤務日数および出勤率に応じて有給休暇が付与されます。<br>●健康診断<br>1年に1回、当社が指定する病院にて実施します。なお、費用については当社で負担いたします。</p>       
                                    </div>
                                </li>
                                <li class="item">
                                    <h3 class="heading-toggle">
                                        <p class="text-title">お仕事が決まったらすぐに働けますか？</p>
                                    </h3>
                                    <div class="content-toggle">
                                        <p class ="text-toggle">まずは当社と雇用契約を結びます。雇用契約の手続きが完了し、派遣先の受け入れ準備が整えば派遣開始となります。</p>       
                                    </div>
                                </li>
    
    
                          </ul>
                        </div>
    
                    </section>
    
                    <!-- box-Recruit -->
                    <section class="box-recruit">
                        <div class="box-title">
                            <h3 class="title-page nine">満足して働ける職場を見つけたい！<br>あなたをお待ちしております！</h3>
                            <p class="line"></p>
                        </div>
                        <div class="inner">
                            <ul class="list-recruit flex">
                                    <li class="item-recruit">
                                        <dl class="dl-recruit">
                                            <dt class="dt-recruit">最短で3日後からスタート！<br>ただいま絶賛募集中の</dt>
                                            <dd class="dd-recruit">求人案件から探す</dd>
                                        </dl>
                                        <a class="link-search02" href="{{Route('top')}}/search/">求人情報はこちらから</a>
                                    </li>
                                    <li class="item-recruit two">
                                        <dl class="dl-recruit">
                                            <dt class="dt-recruit">まずはお話し・ご登録から<br>派遣ご登録も正社員の面接も</dt>
                                            <dd class="dd-recruit">ご登録・ご面談</dd>
                                        </dl>
                                        <a class="link-entry02" href="{{Route('top')}}/recruit/form/">ご登録はこちらから</a>
                                    </li>
    
                           </ul>
                        </div>
    
                    </section>
    
    
    
      
                </div>
        
        </div>         
          



    <script type="text/javascript" src="./js/recruit.js"></script> 

          
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
