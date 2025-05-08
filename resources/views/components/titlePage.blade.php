<?php
$currentPage = request()->segment(1); // or: basename($_SERVER['REQUEST_URI'])

$pageTitles = [
    'company' => [
        'jp' => '会社案内',
        'en' => 'Company Profile',
    ],
    'service' => [
        'jp' => 'サービス紹介',
        'en' => 'Service for business',
    ],
    'reason' => [
        'jp' => '選ばれる理由',
        'en' => 'Reason for business',
    ],
    'flow' => [
        'jp' => 'ご利用の流れ',
        'en' => 'Flow for Business',
    ],
    'faq' => [
        'jp' => 'よくある質問',
        'en' => 'FAQ for Business',
    ],
];

$altText = [
    'company' => [
        'jp' => '社屋外観',
        'en' => 'Main Visual of Company Profile',
    ],
    'service' => [
        'jp' => '男性社員と女性社員',
        'en' => 'Main Visual of Service',
    ],
    'reason' => [
        'jp' => '笑顔の社員',
        'en' => 'Main Visual of reason',
    ],
    'flow' => [
        'jp' => 'フロー紹介',
        'en' => 'Main Visual of flow',
    ],
    'faq' => [
        'jp' => 'よくある質問',
        'en' => 'Main Visual of faq',
    ],
];


$lang = 'jp'; 
if (isset($currentLang) && in_array($currentLang, ['jp', 'en'])) {
    $lang = $currentLang; 
}

$pageBanners = [
    'company' => [
        'pc' => ['company_title_pc.png'],
        'sp' => ['company_title_sp.png'],
    ],
    'service' => [
        'pc' => ['service_title_pc.png'],
        'sp' => ['service_title_sp.png'],
    ],
    'reason' => [
        'pc' => ['reason_title_pc.png'],
        'sp' => ['reason_title_sp.png'],
    ],
    'flow' => [
        'pc' => ['flow_title_pc.png'],
        'sp' => ['flow_title_sp.png'],
    ],
    'faq' => [
        'pc' => ['faq_title_pc.png'],
        'sp' => ['faq_title_sp.png'],
    ],
];


$sliderImgList = isset($pageBanners[$currentPage]) ? $pageBanners[$currentPage] : [
    'pc' => ['top_img_main_01_pc.png'],
    'sp' => ['top_img_main_01_sp.png'],
];

$titleJP = isset($pageTitles[$currentPage]['jp']) ? $pageTitles[$currentPage]['jp'] : '';
$titleEN = isset($pageTitles[$currentPage]['en']) ? $pageTitles[$currentPage]['en'] : '';
$mvCatchCopy = isset($mvCatchCopy) ? $mvCatchCopy : '';
?>

<div id="banner-page">
    <!-- PC and SP -->
    <div class="mv-slider">
        <?php foreach ($sliderImgList['pc'] as $imgPc): ?>
            <?php foreach ($sliderImgList['sp'] as $imgSp): ?>
                <div class="mv-slide">
                    <picture>
                        <source media="(max-width: 767px)" srcset="<?= asset('images/mvSlider/' . $imgSp) ?>">
                        <source media="(min-width: 768px)" srcset="<?= asset('images/mvSlider/' . $imgPc) ?>">
                        <img class="mvPicture" src="<?= asset('images/mvSlider/' . $imgPc) ?>" alt="<?= htmlspecialchars($altText[$currentPage][$lang]) ?>">
                    </picture>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <!-- Title -->
    <div class="title-banner">
        <?php if (!empty($titleJP)): ?>
            <h2 class="mv-title-jp"><?= htmlspecialchars($titleJP) ?></h2>
        <?php endif; ?>
        <?php if (!empty($titleEN)): ?>
            <p class="mv-title-en"><?= htmlspecialchars($titleEN) ?></p>
        <?php endif; ?>
    </div>

    <!-- Optional Catch Copy -->
    <?php if (!empty($mvCatchCopy)): ?>
        <div class="mv-catch-copy">
            <h1><?= htmlspecialchars($mvCatchCopy) ?></h1>
        </div>
    <?php endif; ?>
</div>
