<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<?php $title = "산업단지 안내"?>

<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">
  <div class="col-md-5 mx-auto">
    <h1 class="display-4 font-weight-normal h1_subTitle"><?php echo $title?></h1>
  </div>
  <div class="lnb_wrap">
    <ul class="lnb_ul">
        <li><a href="/pages/complex.php" class="on">율촌·해룡 산단</a></li>
    </ul>
  </div>
</div>

<div class="home">
    <a href="/"><i class="fas fa-home"></i></a> > 산업단지 안내 > 율촌·해룡 산단
</div>

<div class="page-wrap">

    <div class="page-title">
        <span class="eng">INDUSTRIAL COMPLEX</span>
        <h2>율촌·해룡 산업단지</h2>
        <p>광양만권 핵심 산업거점, 율촌·해룡 산업단지를 소개합니다.</p>
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