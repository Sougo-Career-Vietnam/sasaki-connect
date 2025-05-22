

    <div id="contenttop">

        {{--html埋め込み部分 start--}}
        <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="all" href="./css/top.css"/>
        <main id="main_wrap">
   
          

            <section class="block-place flex">
                <div class="text-place">
                    <dl class="dl-place">
                        <dt class="dt-place">現場も経営も<br><span class="blue">「人が」強く</span>する</dt>
                        <dd class="dd-place">
                            製造業の発展には「人」と「技術」が不可欠です。<br>SASAKI CONNECTは、人と技術の二つをつなぐことで現場の生産性向上と企業の経営成長を支援し、ものづくりを支えてまいります。</dd>
                        <dd class="dd-place">ロゴに込めた「つながり」と「クレシェンド（成長）」の想いのもと、企業と人材が互いに成長していくための人材サービスを提供いたします。</dd>
                        <dd class="dd-link">
                            <a class="link-top" href="{{Route('top')}}/company#sc-mission">私たちのミッション・ロゴマークに込めた想いへ</a>
                        </dd>
                    </dl>
                </div>
                 <div class="img-palce">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{asset('images/top/top_img_01_sp.png')}} 2x">
                        <source media="(min-width: 768px)" srcset="{{asset('images/top/top_img_01_pc.png')}} 2x">
                        <img class="sizes" src="{{asset('images/top/top_img_01_pc.png')}}" alt="現場も経営も人が強くする">
                    </picture>  
                 </div>
                 <div class="img-icon">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{asset('images/top/icon_botom_sp.svg')}}">
                        <source media="(min-width: 768px)" srcset="{{asset('images/top/icon_botom_pc.svg')}}">
                        <img class="sizes" src="{{asset('images/top/icon_botom_pc.svg')}}" alt="">
                    </picture>  
                 </div>

            </section>

            <section class="block-main">
                <div class="inner">
                    <h4 class="title-page"><span>SASAKI CONNECTのサービス</span></h4>

                    <ul class="list-connect">
                         <li class="item-conncet flex">
                            <dl class="dl-conncet">
                                <dt class="dt-conncet">サービス紹介<span class="es-dt">SERVICE</span></dt>
                                <dd class="dd-conncet">人材不足の「困った」を当社４つのソリューションをベースにさまざまな角度からアプローチ。<br class="sp-br">特に半導体製造、航空・宇宙・防衛関連、医療機器製造の各業種を得意としております。</dd>
                                 <dd class="flex-mobi">
                                    <a class="link-top two" href="{{Route('top')}}/service">サービス紹介ページへ</a>
                                 </dd>
                                
                            </dl>
                            <div class="box-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/top/top_img_02_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/top/top_img_02_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/top/top_img_02_pc.png')}}" alt="サービスを紹介する社員">
                                </picture> 
                            </div>
                         </li>
                         <li class="item-conncet flex">
                            <dl class="dl-conncet">
                                <dt class="dt-conncet">選ばれる理由<span class="es-dt">REASON</span></dt>
                                <dd class="dd-conncet">当社はすでに大手企業から地場企業まで製造業の企業様にご愛顧いただいております。<br>「現場も経営も強くする」ために、お客様と現場で働く方々、そして当社の三方が繋がり合うことによってWin-Winの関係を築いてまいります。</dd>
                                <dd class="flex-mobi">
                                  <a class="link-top two" href="{{Route('top')}}/reason">選ばれる理由ページへ</a>
                                </dd>
                            </dl>
                            <div class="box-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/top/top_img_03_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/top/top_img_03_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/top/top_img_03_pc.png')}}" alt="説明する社員">
                                </picture> 
                            </div>
                         </li>

                         <li class="item-conncet flex">
                            <dl class="dl-conncet">
                                <dt class="dt-conncet">ご利用の流れ<span class="es-dt">FLOW</span></dt>
                                <dd class="dd-conncet">「人材不足で困っている」「初めて問い合わせたい」という方に、当社サービスをご利用いただくまでの流れを記しました。<br class="pc-br">お気軽にお問い合わせください。</dd>
                                <dd class="flex-mobi">
                                   <a class="link-top two" href="{{Route('top')}}/flow">ご利用の流れページへ</a>
                                </dd>
                            </dl>
                            <div class="box-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/top/top_img_04_sp.png')}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/top/top_img_04_pc.png')}} 2x">
                                    <img class="sizes" src="{{asset('images/top/top_img_04_pc.png')}}" alt="ご利用の流れ">
                                </picture> 
                            </div>
                         </li>
                    </ul>
                    <div class="block-note">
                        <p class="title-note">お客様の声</p>
                        <ul class="list-note flex">
                            <li class="item-note">
                                <h4 class="h4-note">製造業<span class="span-es">TE</span>社（長野県）採用担当T様</h4>
                                <p class="p-note">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                            </li>
                            <li class="item-note">
                                <h4 class="h4-note two">製造業<span class="span-es">P</span>社（山梨県）工場長K様</h4>
                                <p class="p-note">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="block-link">
                <div class="inner-link">
                    <div class="item-link one">
                        <p class="title-link">よくある質問<span class="es-link">FAQ</span></p>
                        <dd class="flex-mobi">
                        <a class="link-top three" href="{{Route('top')}}/faq">お問い合わせの前に</a>
                        </dd>
                    </div>
                    <div class="item-link">
                        <p class="title-link">会社案内<span class="es-link">COMPANY PROFILE</span></p>
                        <dd class="flex-mobi">
                        <a class="link-top three add" href="{{Route('top')}}/company">SASAKI CONNECTのご案内</a>
                        </dd>
                    </div>

                </div>
            </section>


            <section class="block-info">
                <div class="img-icon two">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{asset('images/top/icon_botom_sp.svg')}}">
                        <source media="(min-width: 768px)" srcset="{{asset('images/top/icon_botom_pc.svg')}}">
                        <img class="sizes" src="{{asset('images/top/icon_botom_pc.svg')}}" alt="">
                    </picture>  
                 </div>
                <div class="inner">
                  <div class="conent-info">
                    <h4 class="title-page info"><span>採用・お仕事情報</span></h4>
                    <div class="note-info">
                        <p class="info01">＂一段上の＂お仕事で確かなスキルを</p>
                        <p class="info02">SASAKI CONNECTで安定・ハイスキルの仕事を見つけよう！</p>
                    </div>
                    <p class="text-info">
                        求職者のみなさまへ。<br>
私たちSASAKI CONNECTは製造業に特化したお仕事紹介または派遣サービスをご紹介しています。<br class="sp-br">製造業の中でも大手・成長産業分野に強い当社が、正社員就職やキャリア転職など、あなたのステップアップを応援いたします。
                    </p>
                    <div class="img-pc">
                        <picture>
                            <source media="(min-width: 768px)" srcset="{{asset('images/top/top_img_05_pc.png')}} 2x">
                            <img class="sizes" src="{{asset('images/top/top_img_05_pc.png')}}" alt="笑顔の社員">
                        </picture> 
                     </div>

                    <div class="flex-mobi">
                        <a class="link-top three last" href="{{Route('top')}}/recruit">詳しくはこちら</a>
                    </div>
                    <p class="note-last">お仕事お探しの方はこちら▲のバナーまたは、▼の求人検索からお探しください！</p>
                  </div>

                </div>

            </section>
   




    <script type="text/javascript" src="./js/top.js"></script> 

          
        </main>

        {{--html埋め込み部分 end--}}

    </div>

