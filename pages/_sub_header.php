<?php
if (!defined('_GNUBOARD_')) exit;
?>

<!-- 배너 이미지 영역 -->
<div class="sub-banner <?php echo $section; ?>-bg">
    <div class="sub-banner-inner">
        <h1 class="h1_subTitle"><?php echo $title; ?></h1>
    </div>
</div>

<!-- 탭 메뉴 영역 -->
<div class="lnb_wrap">
    <ul class="lnb_ul">
    <?php if ($section == 'about'): ?>
        <li><a href="/pages/about.php" class="<?php echo ($current_menu == 'about') ? 'on' : ''; ?>">인사말</a></li>
        <li><a href="/pages/vision.php" class="<?php echo ($current_menu == 'vision') ? 'on' : ''; ?>">비전&목표</a></li>
        <li><a href="/pages/history.php" class="<?php echo ($current_menu == 'history') ? 'on' : ''; ?>">연혁</a></li>
        <li><a href="/pages/organization.php" class="<?php echo ($current_menu == 'organization') ? 'on' : ''; ?>">조직구성 및 임원현황</a></li>
        <li><a href="/pages/certificate.php" class="<?php echo ($current_menu == 'certificate') ? 'on' : ''; ?>">인증서</a></li>
    
    <?php elseif ($section == 'complex'): ?>
        <li><a href="/pages/complex.php" class="on">단지소개</a></li>
    
    <?php elseif ($section == 'members'): ?>
        <li><a href="/pages/members.php" class="on">회원사</a></li>
    
    <?php elseif ($section == 'business'): ?>
        <li><a href="/pages/business.php" class="on">사업안내</a></li>
    
    <?php elseif ($section == 'location'): ?>
        <li><a href="/pages/location.php" class="on">오시는 길</a></li>
    <?php endif; ?>
    </ul>
</div>

<!-- 브레드크럼 -->
<div class="home">
    <a href="/"><i class="fas fa-home"></i></a> <?php echo $breadcrumb; ?>
</div>