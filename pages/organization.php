<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<?php $title = "협회소개"?>

<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">
<div class="col-md-5 mx-auto">
<h1 class="display-4 font-weight-normal h1_subTitle"><?php echo $title?></h1>
</div>
<div class="lnb_wrap">
<ul class="lnb_ul">
<li><a href="/pages/about.php">인사말</a></li>
<li><a href="/pages/vision.php">비전&목표</a></li>
<li><a href="/pages/history.php">연혁</a></li>
<li><a href="/pages/organization.php" class="on">조직구성 및 임원현황</a></li>
<li><a href="/pages/certificate.php">인증서</a></li>
</ul>
</div>
</div>

<style>
@media only screen and (max-width: 320px) {
.SF_board{ overflow-x: auto;white-space: nowrap; }
}
@media only screen and (min-width: 321px) and (max-width: 768px){
.SF_board{ overflow-x: auto;white-space: nowrap; }
}
</style>

<div class="home">
<a href="/"><i class="fas fa-home"></i></a> > 협회소개 > 조직구성 및 임원현황
</div>

<div class="container margin-top-80">
<h2 class="h2_title">조직구성 및 임원현황</h2>

<div class="tab_group">
<nav class="tab">
<ul>
<li class="on"><button>조직구성</button></li>
<li><button onclick="location.href='/bbs/board.php?bo_table=officers'">임원현황</button></li>
<li><button onclick="location.href='/bbs/board.php?bo_table=advisors'">고문단 및 자문위원회</button></li>
</ul>
</nav>

<!-- 조직구성 탭 -->
<div class="tab_content on">
<div class="organ_wrap">
<img src="<?php echo G5_URL?>/pages/images/sub/organ.svg" class="img-fluid margin-top-50">
</div>
</div>
</div>
</div>

<!-- Page Content -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>