<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');

$title = "사업 안내";
$section = "business";
$current_menu = "business";
$breadcrumb = "> 사업 안내 > 사업안내";

// 공통 헤더 불러오기
include_once(G5_PATH.'/pages/_sub_header.php');
?>

<div class="page-wrap">

    <div class="page-title">
        <span class="eng">BUSINESS</span>
        <h2>주요 사업</h2>
        <p>(사)율촌·해룡산단협의회의 주요 사업을 소개합니다.</p>
    </div>

    <div class="coming-soon">
        <div class="coming-soon-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="12" r="10"/>
                <polyline points="12 6 12 12 16 14"/>
            </svg>
        </div>
        <p class="coming-soon-eng">COMING SOON</p>
        <h2>페이지 준비 중입니다</h2>
        <div class="coming-soon-divider"></div>
        <p>보다 나은 콘텐츠로 찾아뵙기 위해 준비 중에 있습니다.</p>
        <p class="sub">조금만 기다려 주세요.</p>
    </div>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>