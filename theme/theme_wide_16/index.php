<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit;

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<section class="main-hero">
    <!-- 배경 이미지 -->
    <div class="hero-bg">
        <img src="<?php echo G5_URL?>/pages/images/main/main_visual.jpg" alt="율촌해룡산단">
    </div>
    <!-- 어두운 오버레이 -->
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <div class="hero-inner">
            <p class="hero-eng">YULCHON · HAERYONG INDUSTRIAL COMPLEX</p>
            <h1 class="hero-title">
                광양만권 산업의 중심,<br>
                <span>율촌·해룡</span> 산업단지
            </h1>
            <p class="hero-desc">
                전남 동부권 핵심 산업거점으로<br>
                <strong>입주기업과 함께</strong> 미래를 만들어갑니다
            </p>
            <div class="hero-buttons">
                <a href="/pages/about.php" class="btn-hero btn-primary">협의회 소개 <span>→</span></a>
                <a href="/pages/organization.php" class="btn-hero btn-outline">조직도 보기</a>
            </div>
        </div>
    </div>
</section>
<!-------------------------- ./메인 비주얼 -------------------------->


<!-------------------------- 빠른 메뉴 (4개 카드) -------------------------->
<section class="main-quick">
    <div class="container">
        <div class="quick-grid">
            
            <a href="/pages/about.php" class="quick-card card-blue-light">
                <div class="quick-icon-area">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3 21h18M3 7v14M21 7v14M6 11h.01M6 15h.01M6 19h.01M10 11h.01M10 15h.01M10 19h.01M14 11h.01M14 15h.01M14 19h.01M18 11h.01M18 15h.01M18 19h.01M5 7h14L17 3H7L5 7z"/>
                    </svg>
                </div>
                <div class="quick-text-area">
                    <span class="card-eng">ABOUT</span>
                    <h3>협의회 소개</h3>
                </div>
            </a>
            
            <a href="/bbs/board.php?bo_table=notice" class="quick-card card-green-light">
                <div class="quick-icon-area">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M11 5.882V19.24a1.76 1.76 0 0 1-3.417.592l-2.147-6.15M18 13a3 3 0 1 0 0-6M5.436 13.683A4.001 4.001 0 0 1 7 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.99 3.99 0 0 1-1.564-.317z"/>
                    </svg>
                </div>
                <div class="quick-text-area">
                    <span class="card-eng">NOTICE</span>
                    <h3>공지사항</h3>
                </div>
            </a>
            
            <a href="#" class="quick-card card-blue-light2">
                <div class="quick-icon-area">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0H5m14 0h2m-16 0H3m4-12h.01M11 9h.01M15 9h.01M7 13h.01M11 13h.01M15 13h.01M7 17h.01M11 17h.01M15 17h.01"/>
                    </svg>
                </div>
                <div class="quick-text-area">
                    <span class="card-eng">COMPANIES</span>
                    <h3>입주기업</h3>
                </div>
            </a>
            
            <a href="#" class="quick-card card-green-light2">
                <div class="quick-icon-area">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <div class="quick-text-area">
                    <span class="card-eng">LOCATION</span>
                    <h3>오시는 길</h3>
                </div>
            </a>
            
        </div>
    </div>
</section>
<!-------------------------- ./빠른 메뉴 -------------------------->


<!-------------------------- 공지사항 + 정보 (2단) -------------------------->
<section class="main-info">
    <div class="container">
        <div class="info-grid">
            
            <!-- 공지사항 (큰 영역) -->
            <div class="info-notice">
                <div class="info-head">
                    <h3>공지사항</h3>
                    <a href="/bbs/board.php?bo_table=notice" class="more-link">더보기 +</a>
                </div>
                <ul class="notice-list">
                    <li>
                        <span class="notice-cat">공지</span>
                        <span class="notice-title">2026년도 정기총회 개최 안내</span>
                        <span class="notice-date">2026.05.18</span>
                    </li>
                    <li>
                        <span class="notice-cat">사업</span>
                        <span class="notice-title">스마트그린산단 사업 설명회 안내</span>
                        <span class="notice-date">2026.05.15</span>
                    </li>
                    <li>
                        <span class="notice-cat">모임</span>
                        <span class="notice-title">CEO 협의회 정기 모임 (5월)</span>
                        <span class="notice-date">2026.05.10</span>
                    </li>
                    <li>
                        <span class="notice-cat">공지</span>
                        <span class="notice-title">홈페이지 리뉴얼 오픈 안내</span>
                        <span class="notice-date">2026.05.01</span>
                    </li>
                </ul>
            </div>
            
            <!-- 연락처 박스 (오른쪽) -->
            <div class="info-contact">
                <h3>CONTACT</h3>
                <p class="contact-name">(사)율촌·해룡산단협의회</p>
                
                <ul class="contact-list">
                    <li>
                        <span class="contact-label">TEL</span>
                        <span class="contact-value">061-XXX-XXXX</span>
                    </li>
                    <li>
                        <span class="contact-label">FAX</span>
                        <span class="contact-value">061-XXX-XXXX</span>
                    </li>
                    <li>
                        <span class="contact-label">E-mail</span>
                        <span class="contact-value">info@yulchon.kr</span>
                    </li>
                    <li class="contact-addr">
                        <span class="contact-label">위치</span>
                        <span class="contact-value">전라남도 순천시 해룡면</span>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>
<!-------------------------- ./공지사항 + 정보 -------------------------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>