<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

// 페이지 정보 설정
$title = "협의회소개";
$section = "about";
$current_menu = "vision";
$breadcrumb = "> 협의회소개 > 비전&목표";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');

/* ============================================
   비전 & 목표 데이터
   ============================================ */
$visions = [
    [
        'num' => '01',
        'image' => 'vision_01.jpg',  // 이미지 파일명
        'title_main' => '기업 성장의',
        'title_sub' => '든든한 버팀목',
        'eng' => 'BUSINESS SUPPORT',
        'desc' => '회원사의 애로사항을 적극적으로 수렴하고 대변하는 창구가 되어, 기업이 경영에만 전념할 수 있는 최적의 비즈니스 환경을 조성합니다.',
        'keywords' => ['애로사항 수렴', '대변 창구', '비즈니스 환경'],
        'reverse' => false  // false: 이미지 좌측, true: 이미지 우측
    ],
    [
        'num' => '02',
        'image' => 'vision_02.jpg',
        'title_main' => '산업 패러다임의',
        'title_sub' => '시너지 창출',
        'eng' => 'INDUSTRIAL SYNERGY',
        'desc' => '해양, 철강, 물류, 신소재 등 율촌·해룡산단만이 가진 고유의 산업 인프라를 연결하여, 업종 간 융합과 새로운 비즈니스 기회를 창출합니다.',
        'keywords' => ['해양·철강·물류', '신소재 융합', '비즈니스 기회'],
        'reverse' => true
    ],
    [
        'num' => '03',
        'image' => 'vision_03.jpg',
        'title_main' => '지역 경제의',
        'title_sub' => '핵심 동력',
        'eng' => 'REGIONAL DRIVER',
        'desc' => '지자체 및 유관기관과의 긴밀한 협력을 통해 일자리를 창출하고, 전남 동부권을 넘어 대한민국 산업을 이끄는 거점 산단으로 도약합니다.',
        'keywords' => ['지자체 협력', '일자리 창출', '거점 산단 도약'],
        'reverse' => false
    ],
];
?>

<div class="page-wrap">

    <!-- 페이지 타이틀 (간결하게) -->
    <div class="page-title">
        <span class="eng">VISION &amp; GOAL</span>
        <h2>비전 &amp; 목표</h2>
    </div>

    <!-- 메인 슬로건 (메시지의 중심) -->
    <div class="vision-slogan">
        <div class="slogan-quote">
            <span class="quote-mark quote-open">"</span>
            <h3 class="slogan-text">
                지속 가능한 <strong>경쟁력 있는</strong><br>
                미래형 산업단지 구축
            </h3>
            <span class="quote-mark quote-close">"</span>
        </div>
        <p class="slogan-desc">
            율촌·해룡산단협의회는 단순히 개별 기업의 이익을 대변하는 것을 넘어,<br>
            순천시·광양시·여수시 등 지자체, 대학과의 <strong>관(官)·산(産)·학(學) 동반성장</strong>을 통해<br>
            <strong>지역과 기업이 함께 미래로 나아가는 것</strong>을 최우선 비전으로 삼고 있습니다.
        </p>
    </div>

    <!-- 3대 핵심 비전 -->
    <div class="vision-section">
        <div class="vision-section-title">
            <span class="vs-eng">3 CORE VISIONS</span>
            <h3>3대 핵심 비전</h3>
        </div>

        <div class="vision-list">
            <?php foreach ($visions as $vision): ?>
                <div class="vision-item <?php echo $vision['reverse'] ? 'reverse' : ''; ?>">
                    
                    <!-- 이미지 영역 -->
                    <div class="vision-image">
                        <div class="image-box">
                            <img src="<?php echo G5_URL?>/pages/images/sub/<?php echo $vision['image']; ?>" 
                                 alt="<?php echo $vision['title_main'].' '.$vision['title_sub']; ?>">
                        </div>
                        <div class="image-number"><?php echo $vision['num']; ?></div>
                    </div>

                    <!-- 텍스트 영역 -->
                    <div class="vision-text">
                        <span class="vision-eng"><?php echo $vision['eng']; ?></span>
                        <h4 class="vision-title">
                            <?php echo $vision['title_main']; ?><br>
                            <strong><?php echo $vision['title_sub']; ?></strong>
                        </h4>
                        <p class="vision-desc"><?php echo $vision['desc']; ?></p>
                        <ul class="vision-keywords">
                            <?php foreach ($vision['keywords'] as $kw): ?>
                                <li><?php echo $kw; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>