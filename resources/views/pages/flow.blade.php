@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
      
        <link rel="stylesheet" media="all" href="./css/reason.css"/>
        <link rel="stylesheet" media="all" href="./css/top.css"/>
        <main id="main_wrap">

          <x-titlePage />
          <div id="flow">
            <!-- banner-page -->

               <!-- content-main -->
                <div class="content-main">
                     <h3 class="title-flow">初めて導入やお問い合わせを<br class="sp-br">検討されている皆様に、<br>下記のフローでご案内しております。</h3>
                        <ul class="list-flow">
                            <li class="item-flow">
                                <div class="inner">
                                    <p class="img-icon">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_pic_01_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_pic_01_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/flow/flow_pic_01_pc.png')}}" alt="">
                                        </picture> 
                                    </p>
                                    <dl class="dl-info">
                                        <dt class="dt-info">
                                            <span class="number-info">1</span>お気軽にお問い合わせください
                                        </dt>
                                        <dd class="dd-info">まずはお気軽にお問い合わせください。お問い合わせは当社のお問い合わせフォームまたはお電話にて受け付けております。ご不明点やご相談がございましたらどんな些細なことでも構いませんので、お気軽にご連絡ください。<br class="sp-br">担当者が迅速に対応し、ご要望に応じた最適なご提案をさせていただきます。</dd>
                                    </dl>
                      
                                </div>
                            </li>

                            <li class="item-flow">
                                <div class="inner">
                                    <p class="img-icon">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_pic_02_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_pic_02_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/flow/flow_pic_02_pc.png')}}" alt="">
                                        </picture> 
                                    </p>
                                    <dl class="dl-info">
                                        <dt class="dt-info"><span class="number-info">2</span>ヒアリング</dt>
                                        <dd class="dd-info">最適な人材をご紹介するために、業務内容や求めるスキル・職場環境について詳しくお伺いいたします。どのような業務を担当するのか、必要な経験や資格・社内の雰囲気など、細かい点までヒアリングいたします。また、ご希望の就業開始時期や勤務条件などもお聞かせください。これにより、よりマッチした人材をご提案することが可能になります。</dd>
                                    </dl>
           
                                </div>
                            </li>

                            <li class="item-flow">
                                <div class="inner">
                                    <p class="img-icon">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_pic_03_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_pic_03_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/flow/flow_pic_03_pc.png')}}" alt="">
                                        </picture> 
                                    </p>
                                    <dl class="dl-info">
                                        <dt class="dt-info"><span class="number-info">3</span>お見積もり</dt>
                                        <dd class="dd-info">ヒアリングでお伺いした内容をもとに、お見積もりを作成・提出いたします。<br class="pc-br">料金体系や契約形態、サービス内容についても詳細にご説明し、ご不明点があれば丁寧にお答えいたします。お客様のご予算やご要望に応じて、最適なプランをご提案させていただきますので、ご納得いただいた上で次のステップへと進めます。</dd>
                                    </dl>

                                </div>
                            </li>

                            <li class="item-flow">
                                <div class="inner">
                                    <p class="img-icon">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_pic_04_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_pic_04_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/flow/flow_pic_04_pc.png')}}" alt="">
                                        </picture> 
                                    </p>
                                    <dl class="dl-info">
                                        <dt class="dt-info"><span class="number-info">4</span>ご契約</dt>
                                        <dd class="dd-info">お見積もりやサービス内容にご納得いただけましたら、正式に契約を締結いたします。
                                            契約内容には、派遣・紹介予定派遣・人材紹介などの雇用形態や料金体系、就業条件、トラブル時の対応などが含まれます。契約締結後は、速やかに候補者の選定へと進めてまいります。</dd>
                                    </dl>

                                </div>
                            </li>

                            <li class="item-flow">
                                <div class="inner">
                                    <p class="img-icon">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_pic_05_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_pic_05_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/flow/flow_pic_05_pc.png')}}" alt="">
                                        </picture> 
                                    </p>
                                    <dl class="dl-info">
                                        <dt class="dt-info"><span class="number-info">5</span>候補者のご選定</dt>
                                        <dd class="dd-info">契約締結後、お客様のご要望に合った候補者の選定を開始いたします。<br class="pc-br">当社のデータベースやネットワークを活用し、経験・スキル・人柄を総合的に判断しながら最適な人材をご紹介いたします。選考にあたっては、企業様の求める人物像に合致するかどうかを慎重にチェックし、最適な候補者をピックアップいたします。</dd>
                                    </dl>

                                </div>
                            </li>

                            <li class="item-flow">
                                <div class="inner">
                                    <p class="img-icon">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_pic_06_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_pic_06_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/flow/flow_pic_06_pc.png')}}" alt="">
                                        </picture> 
                                    </p>
                                    <dl class="dl-info">
                                        <dt class="dt-info"><span class="number-info">6</span>職場見学もしくは面接</dt>
                                        <dd class="dd-info">候補者が決定しましたら実際の職場見学していただく、または面接を行っていただきます。職場環境や業務内容を直接確認していただき、候補者との相性を確かめます。<br>さらに、企業様の担当者様と候補者が直接対話し、具体的な業務内容や条件についてすり合わせを行います。双方が納得した上で、次のステップへ進みます。</dd>
                                    </dl>
  
                                </div>
                            </li>

                            <li class="item-flow last">
                                <div class="inner">
                                    <p class="img-icon">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_pic_07_sp.png')}} 2x">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_pic_07_pc.png')}} 2x">
                                            <img class="sizes" src="{{asset('images/flow/flow_pic_07_pc.png')}}" alt="">
                                        </picture> 
                                    </p>
                                    <dl class="dl-info">
                                        <dt class="dt-info"><span class="number-info">7</span>派遣スタートまたは就業開始</dt>
                                        <dd class="dd-info">いよいよ就業開始となります。派遣スタッフの場合は、開始後も専任の担当者が定期的にフォローを行い、就業状況や職場での課題などを確認いたします。必要に応じて、企業様や就業者の方と連携しながら、スムーズな業務遂行をサポートいたします。<br>人材紹介の場合も、一定期間のフォローを行い、定着支援をさせていただきます。</dd>
                                    </dl>

                                </div>
                            </li>

                        </ul>
               
                         <div class="box-note">
                            <div class="inner-note flex">
                                <p class="img-note">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/flow/flow_img_sp.png')}} 2x">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/flow/flow_img_pc.png')}} 2x">
                                        <img class="sizes" src="{{asset('images/flow/flow_img_pc.png')}}" alt="">
                                    </picture> 
                                </p>
                                 <p class="text-note">1〜7の通り、お問い合わせから就業開始まで <br class="pc-br">丁寧に<br class="sp-br">サポートいたします。ぜひお気軽にご相談ください。</p>
                            </div>



                         </div>
                  
    
      

    
    
    
    
     
    
    
    
      
                </div>
        
           </div>
           <x-contactFooter />         
          



    <script type="text/javascript" src="./js/recruit.js"></script> 

          
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
