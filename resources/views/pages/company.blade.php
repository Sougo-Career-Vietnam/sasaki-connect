@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}
      
        <link rel="stylesheet" media="all" href="./css/top.css"/>
        <link rel="stylesheet" media="all" href="./css/company.css"/>
        <main id="main_wrap">

            <x-titlePage />
            <div id="company" class="company">
                <!-- endpoint -->
                <div id="sc-endpoint">
                    <div class="inner">
                        <div class="endpoint-inner">
                            <a href="#sc-mission" class="link scroll">私たちのミッション</a>
                            <a href="#sc-thoughts" class="link scroll">ロゴに込めた想い</a>
                            <a href="#sc-overview" class="link scroll">会社概要</a>
                        </div>
                    </div>
                </div>
                <source media="(max-width: 767px)" srcset="{{asset('images/top/icon_botom_sp.png')}}">
                <!-- mission -->
                <div id="sc-mission">
                    <div class="mission-inner">
                        <div class="content">
                            <h2 class="section-title">
                                <img src="{{asset('images/company/company_title.png')}}" alt="">
                                私たちのミッション
                            </h2>
                            <h3 class="title">技術者とものづくり企業を繋ぎ、<br />日本の製造業のさらなる発展に貢献する</h3>
                            <p class="text">これまで我が国ではものづくりの製造業が日本の基幹産業として発展してきました。その基礎は「人」と「技術」、逆にこの2つのどちらかを失っても発展はありえません。</p>
                            <p class="text">私たちSASAKI CONNECTは「人」「技術の現場」をつなぐことによって、お客様の現場における生産向上や経営の成長をサポートし、ひいては日本の製造業の発展に貢献してまいります。</p>
                        </div>
                        <div class="img">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/company/company_mission_sp.jpg')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/company/company_mission_pc.jpg')}}">
                                <img class="sizes" src="{{asset('images/company/company_mission_pc.jpg')}}" alt="笑顔で語り合う社員">
                            </picture>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="list">
                            <div class="item">
                                <div class="tag">大切にしているPurpose</div>
                                <h4 class="item-title">Connecting for WELL-BEING</h4>
                                <p class="item-text">私たちは人材総合サービスを通してスタッフとクライアント企業それぞれのニーズにお応えし、常に価値のある最適な提案を追求します。</p>
                            </div>
                            <div class="item">
                                <div class="tag">私たちのSolution</div>
                                <h4 class="item-title">ものづくり企業に救いの一手を</h4>
                                <p class="item-text">私たちは、お客様の人手不足による「困った」を人材派遣・人材紹介・製造請負・採用コンサルティング4つのコンセプトカテゴリーで解決いたします。</p>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- message -->
                <div id="sc-message">
                    <div class="inner">
                        <h2 class="section-title">
                            <img src="{{asset('images/company/company_title.png')}}" alt="">
                            代表メッセージ
                        </h2>
                        <div class="grid">
                            <div class="content">
                                <h3 class="title">「Connecting for WELL-BEING」</h3>
                                <p class="text">
                                    平素より格別のご支援を賜り、誠にありがとうございます。<br />
                                    私たちSASAKI CONNECTは、<span>人と企業の未来をつなぐ架け橋</span>として、ただの人材サービスを超え、価値あるマッチングを生み出すことを使命としています。<br />
                                    今、働き方は大きく変わり、製造業もその変革の渦中にあります。歴史的な円安、人材不足、賃金格差——かつてない課題が企業の成長を左右する時代。しかし、どんな時代でも、「人が輝く場所」は必ずある。<br />
                                    私たちは、<span>最適な人材と最適な仕事をつなぎ、新たな可能性を創り出す。</span>その挑戦をこれからも加速させていきます。<br />
                                    未来を動かすのは、今この瞬間の選択。<br />
                                    <span>人と仕事の未来を、もっと自由に、もっとダイナミックに。</span>
                                </p>
                            </div>
                            <div class="img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/company/company_message_sp.jpg')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/company/company_message_pc.jpg')}}">
                                    <img class="sizes" src="{{asset('images/company/company_message_pc.jpg')}}" alt="代表の写真">
                                </picture>
                            </div>
                            <div class="sign">
                                株式会社SASAKI CONNECT<br />
                                代表取締役<br class="pc-br" /> &nbsp;佐々木啓二
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- thoughts -->
                <div id="sc-thoughts">
                    <div class="inner">
                        <h2 class="section-title">
                            <img src="{{asset('images/company/company_title.png')}}" alt="">
                            ロゴに込めた想い
                        </h2>
                        <div class="aim">
                            <div class="aim-text">
                                <h3 class="title">つなぐ・成長する・お互いに強くすることを込めて</h3>
                                <p class="text">SASAKI CONNECTロゴの中心にある三日月形オブジェクトは「つながり」と三日月の語源「クレシェンド（＝だんだん大きくなる）」に由来しています。コンセプトは「DNA」。つながりの三日月が二重らせんのように互いに交わり合うことによって、お互いを強く成長させ合うことを意味しています。</p>
                            </div>
                            <div class="aim-img">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/company/company_thoughts_logo_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/company/company_thoughts_logo_pc.png')}}">
                                    <img class="sizes" src="{{asset('images/company/company_thoughts_logo_pc.png')}}" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="connect">
                            <h3 class="title">SASAKI CONNECT６つの”つなぐ”</h3>
                            <p class="text">SASAKI CONNECTは６つのつなぐ（コネクト）からお客様の製造・生産現場と経営を強くする人材サービスをご提供いたします。</p>
                            <div class="list">
                                <div class="item">
                                    <div class="item-img">
                                        <picture>
                                            <source srcset="{{asset('images/company/company_thoughts_01.png')}}">
                                            <img class="sizes" src="{{asset('images/company/company_thoughts_01.png')}}" alt="">
                                        </picture>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">技術をつなぐ</h4>
                                        <p class="item-text">Connecting technology.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-img">
                                        <picture>
                                            <source srcset="{{asset('images/company/company_thoughts_02.png')}}">
                                            <img class="sizes" src="{{asset('images/company/company_thoughts_02.png')}}" alt="">
                                        </picture>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">ハートをつなぐ</h4>
                                        <p class="item-text">Connecting hearts.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-img">
                                        <picture>
                                            <source srcset="{{asset('images/company/company_thoughts_03.png')}}">
                                            <img class="sizes" src="{{asset('images/company/company_thoughts_03.png')}}" alt="">
                                        </picture>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">最短でつなぐ</h4>
                                        <p class="item-text">Connecting shortest.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-img">
                                        <picture>
                                            <source srcset="{{asset('images/company/company_thoughts_04.png')}}">
                                            <img class="sizes" src="{{asset('images/company/company_thoughts_04.png')}}" alt="">
                                        </picture>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">最善をつなぐ</h4>
                                        <p class="item-text">Connecting the best.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-img">
                                        <picture>
                                            <source srcset="{{asset('images/company/company_thoughts_05.png')}}">
                                            <img class="sizes" src="{{asset('images/company/company_thoughts_05.png')}}" alt="">
                                        </picture>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">人をつなぐ</h4>
                                        <p class="item-text">Connecting people.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-img">
                                        <picture>
                                            <source srcset="{{asset('images/company/company_thoughts_06.png')}}">
                                            <img class="sizes" src="{{asset('images/company/company_thoughts_06.png')}}" alt="">
                                        </picture>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">未来をつなぐ</h4>
                                        <p class="item-text">Connecting the future.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- overview -->
                <div id="sc-overview">
                    <div class="bg">
                        <picture>
                            <source media="(max-width: 767px)" srcset="{{asset('images/company/company_overview_line_sp.png')}}">
                            <source media="(min-width: 768px)" srcset="{{asset('images/company/company_overview_line_pc.png')}}">
                            <img class="sizes" src="{{asset('images/company/company_overview_line_pc.png')}}" alt="">
                        </picture>
                    </div>
                    <div class="inner">
                        <h2 class="section-title">
                            <img src="{{asset('images/company/company_title.png')}}" alt="">
                            会社概要
                        </h2>
                        <div class="overview-inner">
                            <dl class="line">
                                <dt class="title">会社名</dt>
                                <dd class="text">株式会社SASAKI CONNECT</dd>
                            </dl>
                            <dl class="line">
                                <dt class="title">代表者</dt>
                                <dd class="text">代表取締役会長　佐々木啓二</dd>
                            </dl>
                            <dl class="line">
                                <dt class="title">従業員数</dt>
                                <dd class="text">8名（令和7年3月31日現在）</dd>
                            </dl>
                            <dl class="line">
                                <dt class="title">本社所在地</dt>
                                <dd class="text">
                                    〒407-0175<br />
                                    山梨県韮崎市穂坂町宮久保1155-1<br />
                                    TEL：0120-228-272
                                </dd>
                            </dl>
                            <dl class="line">
                                <dt class="title">資本金</dt>
                                <dd class="text">4,000万円</dd>
                            </dl>
                            <dl class="line">
                                <dt class="title">設立年月日</dt>
                                <dd class="text">2024年2月</dd>
                            </dl>
                        </div>
                    </div>
                </div>
    
                <!-- offices -->
                <div id="sc-offices">
                    <div class="inner">
                        <h2 class="section-title">
                            <img src="{{asset('images/company/company_title.png')}}" alt="">
                            事業所一覧
                        </h2>
                        <div class="offices-inner">
                            <div class="group">
                                <h3 class="title">本社</h3>
                                <p class="text">
                                    〒407-0175 &nbsp;山梨県韮崎市穂坂町宮久保1155-1<br />
                                    TEL：0120-228-272
                                </p>
                                <div class="box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.20794783367!2d138.46178957645958!3d35.721104027781465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c0be95d2beacf%3A0x106336215e360321!2z44CSNDA3LTAxNzUg5bGx5qKo55yM6Z-u5bSO5biC56mC5Z2C55S65a6u5LmF5L-d77yR77yR77yV77yV4oiS77yR!5e0!3m2!1sja!2sjp!4v1747212618212!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="group">
                                <h3 class="title">宮城office</h3>
                                <p class="text">
                                    〒981-3629 &nbsp;宮城県黒川郡大和町テクノヒルズ2-2<br />
                                    TEL：0120-228-272
                                </p>
                                <div class="box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3128.3895118897185!2d140.8523113765448!3d38.363109778051445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8981f47a929c01%3A0x3f86207fca2dd673!2z44CSOTgxLTM2Mjkg5a6u5Z-O55yM6buS5bed6YOh5aSn5ZKM55S644OG44Kv44OO44OS44Or44K677yS4oiS77yS!5e0!3m2!1sja!2sjp!4v1747212656117!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   

      
            <x-contactFooter />    
               
          
            {{-- <script type="text/javascript" src="./js/recruit.js"></script>  --}}
            <script type="text/javascript" src="./js/company.js"></script> 
          
        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
