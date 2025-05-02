<?php
$sliderImgList = array(
    'pc' => array(
//        'mv_movie_pc.mp4',
        'top_img_main_01_pc.png',
        'top_img_main_02_pc.png',
        'top_img_main_03_pc.png'
    ),
    'sp' => array(
//        'mv_movie_sp.mp4',
        'top_img_main_01_sp.png',
        'top_img_main_02_sp.png',
        'top_img_main_03_sp.png'
    ),
);
$mvCatchCopy = '';//メインビジュアルのキャッチコピーを「''」内に入力してください
?>
 <link rel="stylesheet" media="all" href="./css/top.css"/>
@if(($sliderImgList['pc'] && count($sliderImgList['pc']) > 0) || ($sliderImgList['sp'] && count($sliderImgList['sp']) > 0))

<style>

.swiper-wrapper {
    position: relative;
    z-index: 100;
}

.img-bg {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 5;

}

.swiper-wrapper .img-icon02 {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 3;
    clip-path: inset(0 100% 0 0);
    animation: drawLines 4s forwards;
    animation-delay: 2s
}


@keyframes drawLines {
    from {
        clip-path: inset(100% 0 0 0);
    }

    to {
        clip-path: inset(0 0 0 0);
    }
}

.swiper-wrapper .img-icon01 {
    width: 52.5%;
    position: absolute;
    top: -11.5%;
    right: -2.9%;
    z-index: 2;
    clip-path: circle(0% at 50% 50%);
    animation: drawCircle2 4s ease-out forwards;
}
.swiper-wrapper .img-icon01 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    min-width: auto !important;
}



@keyframes drawCircle2 {
    from {
        clip-path: circle(0% at 50% 50%);
    }

    to {
        clip-path: circle(150% at 50% 50%);
    }
} 


.box-circle {
    width: clamp(300px, 30vw, 540px);
    height: clamp(300px, 30vw, 540px);
    background: rgba(235, 240, 249, 0.1);
    border-radius: 50%;
    position: absolute;
    top: 12%;
    left: 2%;
    z-index: 2;
    clip-path: circle(0% at 50% 50%);
    animation: drawCircle2 4s ease-out forwards
}


#top .swiper-wrapper .box-text {
     opacity: 0; 
      animation: fadeIn 4s ease-in forwards; 
      animation-delay:1s; 
     z-index: 9;
}

@keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px); 
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
}

.swiper-slide {
    z-index: 2;
}



@media print,
screen and (max-width: 786px) {
    .swiper-wrapper .img-icon01,.box-circle {
        display: none
    }
    .swiper-wrapper .img-icon02,.img-bg {
        display: none
    }
}


</style>

<div id="mvSlider">
    <div class="mvWrapper">
        <div class="mvInner">
            <?php
            $imgListPc = $sliderImgList[ 'pc' ];
            $imgListSp = $sliderImgList[ 'sp' ];
            ?>
            <?php if(count($imgListPc) == 1): ?>
            <div class="mvOnlyOne">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[0])}}">
                    <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/'. $imgListPc[0])}}">
                    <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgListPc[0])}}" alt="<?php echo $mvCatchCopy; ?>">
                </picture>

               
            </div>
            <?php elseif(count($imgListPc) > 1): ?>
            <div class="mvMultiple js-mvSlider">
                <div class="swiper-wrapper">
                    <?php foreach($imgListPc as $key => $imgName): ?>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/mvSlider/'. $imgListSp[$key])}} 2x">
                                <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/'. $imgName)}} 2x">
                                <img class="mvPicture" src="{{asset('images/mvSlider/'. $imgName)}}" alt="<?php echo $mvCatchCopy; ?>">
                            </picture>
                            <?php if($key == 0): // Chỉ in img-icon01 ở slide đầu tiên ?>
                              <p class="img-icon01">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/top_img_main_01a_pc.png')}}">
                                    <img class="mvPicture" src="{{asset('images/mvSlider/top_img_main_01a_pc.png')}}" alt="">
                                </picture>
                              </p>
                        
                             <?php endif; ?>
                             <p class="box-circle">

                             </p>
                        </div>
                        <div class="box-text">
                            <h1 class="title-main">人が、<br>現場と経営を<br>強くする</h1>
                            <p class="note-banner">SASAKI CONNECTは、<br>製造現場における人と信頼をつなぐ人材会社です</p>
                        </div> 

                        <p class="img-bg">
                            <picture>
                                <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/bg_main_pc.png')}}">
                                <img class="mvPicture" src="{{asset('images/mvSlider/bg_main_pc.png')}}" alt="">
                            </picture>
                        </p>
           
               
 


                        <p class="img-icon02">
                            <picture>
                                <source media="(min-width: 768px)" srcset="{{asset('images/mvSlider/top_img_main_01b_pc.png')}}">
                                <img class="mvPicture" src="{{asset('images/mvSlider/top_img_main_01b_pc.png')}}" alt="">
                            </picture>
                        </p>

   
                          

                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        $(function() {
            var mySwiperTop = new Swiper('#mvSlider .js-mvSlider', {// Swiperオプション
                loop: true,
                effect: 'fade',// アニメーションを指定（'slide' 'fade' 'coverflow' 'flip'）
                speed: 3000,// 移動速度（3000=3秒）
                autoplay: {
                    delay: 3000,// スライド間の間隔（3000=3秒）
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                breakpoints: {
                    767: {// スマホのみ
                        speed: 3000,// 移動速度（3000=3秒）
                        autoplay: {
                            delay: 3000,// スライド間の間隔（3000=3秒）
                        }
                    }
                },
                slidesPerView: 1,
                spaceBetween: 0,
                centeredSlides: false,
                simulateTouch: false,
                autoResize: false,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
            $('#mvSlider .mvMultiple .swiper-slide').on('touchmove', function(){
                return true;
            });
        });
    </script>
</div>

@endif